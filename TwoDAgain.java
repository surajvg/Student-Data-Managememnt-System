class TwoDAgain {
    public static void main(String args[]) {
        int array[] = { 10, 20, 30 };

        System.out.println("1D Array elements");
        for (int ele : array)
            System.out.print(ele + "\t");

        int a[][] = { { 10, 20 }, { 30, 40 } };
        System.out.println("\n2D Array elements");
        for (int b[] : a) {
            for (int ele2 : b) {
                System.out.print(ele2 + "\t");
            }
            System.out.println();
        }
    }
}
