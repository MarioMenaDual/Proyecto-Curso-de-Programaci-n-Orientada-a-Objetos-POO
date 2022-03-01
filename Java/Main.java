package Java;
class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car("AMQ123", new Account("Andres Herrera","AMQ123","andres@gmail.com","12345"));
        car.passegenger = 4;
        car.printDataCar();
        
        Car car2 = new Car("QWE567",new Account("Andrea Herrera","QWE567","andrea@gmail.com","9374638"));
        car2.passegenger = 3;
        System.out.println("Car License: " + car2.license);
        car2.printDataCar();


        User user = new User("mario","amns","mario@gmail.com","54477");
        user.printDataAccount();
       
        Driver driver = new Driver("juan","hauns","juan@gmail.com","32477");
        driver.printDataAccount();

        
    }
}