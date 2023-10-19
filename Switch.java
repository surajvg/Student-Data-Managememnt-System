import java.util.Scanner;

class Switch {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter your choice : ");
        int rc = sc.nextInt();
        String msg;

        switch (rc) {
            case 1:
                msg = "Syntax error";
                break;
            case 2:
                msg = "Undefined variable";
                break;
            default:
                msg = "Unknown error";
                break;
        }
        System.out.println("\n" + msg);
    }
}
