public class Player {
    public String name;
    public int age;
    public double salary;
    public String role;

    public Player() {
        name = "somebody";
        age = 10;
        salary = 0.1;
        role = "nobody";
    }

    public Player(String name, int age, double salary, String role) {
        this.name = name;
        this.age = age;
        this.salary = salary;
        this.role = role;
    }

}
