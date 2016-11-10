package teamzonne.zonne_solaris;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

import teamzonne.zonne_solaris.*;

public class SignUpActivity extends AppCompatActivity {
    static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
    static final String DB_URL = "sql201.byetcluster.com/0fe_19140794_zonne";

    //  Database credentials
    static final String USER = "0fe_19140794";
    static final String PASS = "1234678";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_sign_up);
        final Button sign_up = (Button) findViewById(R.id.Sign_up);

                sign_up.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        View header = (View)getLayoutInflater().inflate(R.layout.status_layout, null);
                        TextView headerValue = (TextView)header . findViewById(R.id.status);
                        if(!(findViewById(R.id.password) == (findViewById(R.id.confirm_password)){
                            //password don't match
                            headerValue.setText("Passwords Don't match");
                                } else{
                            hash_salt hasher = new hash_salt();
                            byte[] salt = hasher.getSalt();
                            String[] userinfo = {findViewById(
                                    R.id.user_name),
                                    hasher.hash((findViewById(R.id.password)), salt),
                                    salt,
                                    hasher.hash((findViewById(R.id.card_no)), salt),//credit card no
                                    hasher.hash((findViewById(R.id.exp_date)), salt), // expiry date
                                    hasher.hash((findViewById(R.id.cvv)), salt),
                                    findViewById(R.id.card_name),
                                    findViewById(R.id.email),
                                    findViewById(R.id.phone)

                            };

                            boolean Signup = add_user(v,userinfo)


                            if (Signup)
                            headerValue.setText("Added User");
                            else
                                headerValue.setText("Failled to add new user");

                        }
                    }
                });
    }

    public boolean add_user(View v,String[] userinfo) {
        Connection conn = null;
        Statement stmt = null;
        try {
            //STEP 2: Register JDBC driver
            Class.forName("com.mysql.jdbc.Driver");

            //STEP 3: Open a connection
            System.out.println("Connecting to database...");
            conn = DriverManager.getConnection(DB_URL, USER, PASS);
            stmt = conn.createStatement();
            String sql = "INSERT INTO Users(Username,Password,Salt,Creditcard_no,Expire_date,Cvv,Name_card,Email,Phone" + "VALUES(" + userinfo[0]  + "," + userinfo[1] + "," + userinfo[2] + "," + userinfo[3] +  "'" + userinfo[4] + "," + userinfo[5] +","+ userinfo[6] +","+ userinfo[7] + "," + userinfo[8] +","+userinfo[9]+")";
            stmt.executeUpdate(sql);


        }catch(SQLException se){
            //Handle errors for JDBC
            se.printStackTrace();
            return false;

        }catch(Exception e){
            //Handle errors for Class.forName
            e.printStackTrace();
            return false;

        }finally {
            //finally block used to close resources
            try {
                if (stmt != null)
                    conn.close();
                return true;
            } catch (SQLException se) {
            }// do nothing
            try {
                if (conn != null)
                    conn.close();
                return true;
            } catch (SQLException se) {
                se.printStackTrace();
                return false;

            }//end finally try
        }

}
}
