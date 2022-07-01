# PHP Final Project README.md

![Sparrow Logo](https://i-s2.328888.xyz/2022/06/29/62bc68d9c4c00.png)


![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/Lactorsj/Carnival-Booking-System-by-Team-Sparrow)
![GitHub](https://img.shields.io/github/license/Lactorsj/Carnival-Booking-System-by-Team-Sparrow)
![GitHub language count](https://img.shields.io/github/languages/count/Lactorsj/Carnival-Booking-System-by-Team-Sparrow)
![GitHub top language](https://img.shields.io/github/languages/top/Lactorsj/Carnival-Booking-System-by-Team-Sparrow)
[![GitHub issues](https://img.shields.io/github/issues/Lactorsj/Carnival-Booking-System-by-Team-Sparrow)](https://github.com/Lactorsj/Carnival-Booking-System-by-Team-Sparrow/issues)

---

## About Team Sparrow

We are several students from University-365 & Hebei University of Technology in China. In a group project in 2021, member CHEN Yuqi first proposed the name and concept of Team Sparrow. Since then, Team Sparrow was officially established, and CHEN Yuqi also designed its logo and slogan—Small but Fully Functional.

To let you know, Team Sparrow are just a bunch of CS students who want to make something interesting by using their knowledge they know. We are not pro game studio or solution provider, but we have faith to provide you the best we can do.

Team Sparrow 2021 Member: CHEN Yuqi, CHENG Hanchang, KANG Weihao, YANG Chuhan, WANG Jinghao

Team Sparrow 2022 Member (for 1Proj): CHEN Yuqi, CHENG Hanchang, KANG Weihao, BU Deze, WANG Jinghao, ZHAO Chihao

Team Sparrow 2022 Member (for PHP Programming): CHEN Yuqi, CHENG Hanchang, KANG Weihao, WANG Jinghao

---

## Division of Assignment

|Name   | Assignment|
| ---   | --- |
|CHEN Yuqi| Set-up of the project, Log in/Register Page(by Laravel Breeze), the Homepage and README.md|
|CHENG Hanchang|Booking page and its relatively features, Database design|
|KANG Weihao|Check in Page and its relatively features, Database design|
|WANG Jinghao|Dashboard Page and its relatively features, Database design and Project Management by Git|

---

## Environment Requirement

 - PHP V8.0.19+
 - Laravel Framework V9.17.0+
 - Composer V2.3.5+
 - MySQL, Git Required

---

## Install Instruction

### Step #1 Use Git-clone to get the code from Github

Run this command in your Terminal, such as in Windows 11, we recommended Powershell:

```powershell
git clone git@github.com:Lactorsj/Carnival-Booking-System-by-Team-Sparrow.git
```

A folder named "Carnival-Booking-System-by-Team-Sparrow" with the project code inside will be created, and this is the project root directory, you can rename it anytime.

### Step #2 Download dependency code from Laravel and Node.js

Run these commands in your Terminal:

```powershell
cd .\Carnival-Booking-System-by-Team-Sparrow\

composer install

npm install
```

### Step #3 Database Setup & Migration

You should create a database first. 

You can use this command in your MySQL Command Line Client:

```sql
CREATE DATABASE test;
```

After running this command, a database named 'test' will be created.

Open ".env" file in the root directory, modify Line 11-16 to your config.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourDatabaseName
DB_USERNAME=yourUserName
DB_PASSWORD=yourPassWord
```

After modify the environment, run this command below in your terminal:

```powershell
php artisan migrate
```

And that's all for the installation!


### Step #5 Run
Use command:

```powershell
php artisan serve
```
 to run on your machine.
