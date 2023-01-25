import email

from re import M





v = 2

print(type(v))



m = 2 * 5 - 1

print(m)

f = 2 * (5 - 1)

print(f)



import random



health = random.randint(5,20)

print(health)



import math

h = math.ceil(3.6)

print(h)



hello = "hello world"

print(hello)



message = 'john said to me"I will see you"'

print(message)



# Ask user for name

name = input("what is you name?  ")



# Ask user for age

age = input("what is your age?  ")



# Ask user for city

city = input("what is your city?  ")



# Ask user for what he enjoys

enjoy = input("what do you enjoy?  ")



# create output text

string = "your name {}, your age {}, your city {} and you enjoy {}".format(name, age, city, enjoy)

print(string)



t = "happy birthday".upper()

print(t)



nurse = input("what is your email?  ").strip()



user = email[:email.index("@")]



domain = email[email.index("@") + 1 :]



output = "your username {}, your domain name {}".format(user, domain) 



print(output)
