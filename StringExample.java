public class StringExample {
    public static void main(String args[]) {
        String s1 = "suraj";
        System.out.println(s1);
        char ch[] = s1.toCharArray();
        for (int i = 0; i < s1.length(); i++) {
            System.out.println(ch[i] + "\t");
        }

        char ch2[] = { 's', 't', 'r', 'i', 'n', 'g', 's' };
        String s2 = new String(ch);// converting char array to string

        String joinString = String.join("-", "welcome", "to", "javat");
        System.out.println(joinString);

        String str = "oooooo-hhhh-oooooo";
        String rs = str.replace("h", "s"); // Replace 'h' with 's'
        System.out.println(rs);

        String str1 = "First String";
        String str2 = "Second String";
        String str3 = str1;

        System.out.println("Length of the 1st string: " + str1.length());
        System.out.println("Char at index 2 in 1st string: " + str1.charAt(2));

        if (str1.equals(str2))
            System.out.println("string1 == string2");
        else
            System.out.println("string1 != string2");

        if (str1.equals(str3))
            System.out.println("strring1 == string3");
        else
            System.out.println("string1 != string3");
    }
}
