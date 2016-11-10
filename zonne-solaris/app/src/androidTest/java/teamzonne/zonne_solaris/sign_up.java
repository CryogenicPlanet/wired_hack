package teamzonne.zonne_solaris;
import java.sql.*;

/**
 * Created by Raja gopal on 10-11-2016.
 */
public class sign_up {
    // JDBC driver name and database URL
    static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
    static final String DB_URL = "sql201.byetcluster.com/0fe_19140794_zonne";

    //  Database credentials
    static final String USER = "0fe_19140794";
    static final String PASS = "1234678";
    public static String new_user() {
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
