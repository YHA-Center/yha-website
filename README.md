<!-- header  -->

<div align=center>

<img src="./public/image/logo/logo.png" width="200px">

# YHA Computer Training Center   

🔆 ***Build Your Future with Technology*** 🔆

</div>

<!-- content  -->

## Getting Started

1. Clone the **repo**

```shell
$ mkdir project
$ cd project
$ git clone https://github.com/YHA-Center/yha-website.git
```

2. Create **.env** file

```shell
$ cp .env.example .env
```

3. Edit **.env** for database configuration

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<DATABASENAME>   // your database name
DB_USERNAME=root
DB_PASSWORD=<PASSWORD>     // your database password
```
4. Import the following **database file** in your local device.

File Here -> [db.sql](https://github.com/YHA-Center/yha-website/db.sql)

```shell
$ mysql -u root -p
$ CREATE database dbname;
$ use dbname;
$ source path/to/your/file.sql;
$ show tables;
```

5. Run the project

```shell
$ php artisan serve
```

## How to Pull Request and Push

To make a **pull request**, 

```shell
$ git branch your_branch_name
$ git checkout your_branch_name
$ git add .
$ git commit -m "message"
$ git push origin your_branch_new
```





