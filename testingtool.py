import re

#Validation for MIS
def valid_MIS(mis):
    try:
        i = mis.isdecimal()
        if i==True:
            print("Valid MIS")
        else:
            print("Invalid MIS")
    except:
        print("Error")

#Validation for Name
def valid_name(name):
    name = name.replace(" ","")
    try:
        i = name.isalpha()
        if i == True:
            print("Valid Name")
        else:
            print("Invalid name")
    except:
        print("Error)")

#Validation for phone number
def valid_phone(phone):
    try:
        if not len(phone) == 10:
            print("Invalid Phone number, does not have 10 digits")
        elif not phone.isdecimal():
            print("Invalid characters in phone number")
        else:
            print("Valid phone Number")
    except:
        print("Error")

#Validation for Blood Group        
def valid_bg(bg):
    try:
        if bg == "O+" or bg == "A+" or bg == "A-" or bg == "AB+" or bg == "AB-" or bg == "B+" or bg == "B-" or bg == "O-":
            print("Valid Blood Group")
        else:
            print("Invalid BloodGroup")
    except:
        print("Error")
#test cases
# valid_phone("12345") #invalid case
# valid_phone("123456789=") #invalid case
# valid_phone("9175801482") #valid case

# valid_MIS("111903134") #valid MIS

# valid_name("Anjali Dofe") #valid name
# valid_name("Aditya0444") #invalid name


  
