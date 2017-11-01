package com.rutvikkakadiya.tollpay;

import android.content.Context;
import android.os.AsyncTask;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.InputStreamReader;
import java.net.URI;
import java.net.URL;



/**
 * Created by kakad on 27-10-2017.
 */

public class delete extends AsyncTask<String,Void,String> {

    private Context context;
    private String sr;
    private String id;

    public delete(Context context, String id) throws FileNotFoundException {
        this.context = context;
        this.id = id;

    }

    @Override
    protected String doInBackground(String... urls) {

        String link;

        link = "http://192.168.43.233/connect.php?id="+urls[0];
        StringBuffer sb = null;
        try {
            URL url = new URL(link);
            HttpClient client = new DefaultHttpClient();
            HttpGet request = new HttpGet();
            request.setURI(new URI(link));
            HttpResponse response = client.execute(request);
            BufferedReader in = new BufferedReader
                    (new InputStreamReader(response.getEntity().getContent()));
            sb = new StringBuffer("");
            String line="";

            while ((line = in.readLine()) != null) {
                sb.append(line);
                break;
            }
            in.close();


            return sb.toString();



        } catch (Exception e) {

            String exception = new  String("Exception: "+e.getMessage().toString());
            return exception;
        }
    }
}
