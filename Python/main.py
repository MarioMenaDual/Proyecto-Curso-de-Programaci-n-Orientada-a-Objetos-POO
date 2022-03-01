from lib2to3.pgen2 import driver
from car import Car
from account import Account
from user import User
from driver import Driver

if __name__ == "__main__":
    print("Hola Mundo")
    car = Car("AMS234",Account("Andres Herrera","AMS234","andres@gmail.com","8374839"))
    print(vars(car))

    user = User("Mario","MEMDS","mario@gmail.com","738230")
    print(vars(user))

    driver = Driver("Juan","JUMSS","juan@gmail.com","938729")
    print(vars(driver))