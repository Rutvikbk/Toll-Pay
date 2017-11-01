package com.rutvikkakadiya.tollpay;

import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.widget.Toast;

import com.google.zxing.Result;

import me.dm7.barcodescanner.zxing.ZXingScannerView;

public class MainActivity extends AppCompatActivity implements ZXingScannerView.ResultHandler{



    private ZXingScannerView zXingScannerView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        zXingScannerView = new ZXingScannerView(getApplicationContext());


        setContentView(zXingScannerView);
        zXingScannerView.setResultHandler(this);
        zXingScannerView.startCamera();
    }


    protected void onPause() {
        super.onPause();
        zXingScannerView.stopCamera();
    }
    public void handleResult(Result result) {
        //Result
        Log.w("handleResult", result.getText());
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("Scan Result:");
        builder.setMessage(result.getText());
        AlertDialog alertDialog = builder.create();
        //alertDialog.show();
        String params[] = new String[2];

        params[0] = result.getText().toString();

        try {
            String s =
                    new delete(getApplicationContext(),params[0]).execute(params).get();
        } catch (Exception e) {
            e.printStackTrace();
        }

        Toast.makeText(getApplicationContext(),result.getText(),Toast.LENGTH_LONG).show();
        //Log.i("lol: ", result.getText());

        //Resume Scanning
        zXingScannerView.resumeCameraPreview(this);
    }
}
