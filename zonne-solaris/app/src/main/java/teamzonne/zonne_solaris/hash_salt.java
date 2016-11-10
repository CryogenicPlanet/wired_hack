package teamzonne.zonne_solaris;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.lang.*;
import java.security.SecureRandom;
import java.util.Random;

public class hash_salt {
    private static final Random RANDOM = new SecureRandom();


    public String  hash(String password, byte salt[]){
        try {
            MessageDigest digest = java.security.MessageDigest.getInstance("MD5");
            password  =  password + salt ;
            digest.update(password.getBytes());
            byte messageDigest[] = digest.digest();
            StringBuffer hexString = new StringBuffer();
            for (int i=0; i<messageDigest.length; i++) {
                hexString.append(Integer.toHexString(0xFF & messageDigest[i]));
            }
            return hexString.toString();
        }
        catch (NoSuchAlgorithmException e) {

        }
            return null;

    }
    public byte[] getSalt() {
        byte[] salt = new byte[16];
        RANDOM.nextBytes(salt);
        return salt;
    }
}
