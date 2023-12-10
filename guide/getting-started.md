# Getting Started

1. Fork the repo

![click-fork-button](../public/image/guide/click-fork-button.jpg)

2. Clone the **repo**

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

1. Create new branch which you work with

```shell
$ git branch your_branch_name
$ git checkout your_branch_name
```

2. Push to the remote server

```shell
$ git add .
$ git commit -m "message"
$ git push origin your_branch_new
```

3. Create **Pull Request** and **Merge** with **Main** branch

Click **Compare & pull request**

![click-compare-&-pull-request](../public/image/guide/click-pull-request.jpg)

Click **Create Pull Request**. You can also change **Add a title** field what you like.

![click-create-pull-request](../public/image/guide/click-pull-request-btn.jpg)

Click **Merge Pull Request** and then click **Merge**. We can also add **Github Action - CI/CD**.

![click-create-pull-request](../public/image/guide/click-merge-pull-request.jpg)

**Well done, You have successfully Merged the codes**.

**NOTE**   
If branch is updated, you have to **pull** it first in your terminal before making any changes to your project.

```shell
$ git pull https://github.com/YHA-Center/yha-website.git
```
---