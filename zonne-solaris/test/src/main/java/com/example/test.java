package com.example;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

public  class test {
    // JDBC driver name and database URL
    static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
    static final String DB_URL = "sql201.byetcluster.com/0fe_19140794_zonne";

    //  Database credentials
    static final String USER = "0fe_19140794";
    static final String PASS = "1234678";
    public static void Main() {
        Connection conn = null;
        Statement stmt = null;
        try {
            //STEP 2: Register JDBC driver
            Class.forName("com.mysql.jdbc.Driver");

            //STEP 3: Open a connection
            System.out.println("Connecting to database...");
            conn = DriverManager.getConnection(DB_URL, USER, PASS);
            stmt = conn.createStatement();
        } catch (Exception e) {

        }

    }


}
