create table cats(

    primary key(id),
    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT NOW()
);

create table products(

    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    primary key(id),
    `name` VARCHAR(255) NOT NULL,
    `description` text NOT NULL,
    `price` DECIMAL(8,2) UNSIGNED NOT NULL ,
    `peices_num` SMALLINT UNSIGNED NOT NULL,
    `img` VARCHAR(255),
    /*forien key bta3 gawal al category*/
    `cat_id` int UNSIGNED,  
    `created_at` DATETIME NOT NULL DEFAULT NOW(),
    /*al foreign key bta3 alproducts bases 3la al id bta3 al category*/
    FOREIGN key (cat_id) REFERENCES cats(id) ON DELETE SET NULL
);

CREATE TABLE orders(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    primary key(id),
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) ,
    `phone` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255),
    created_at DATETIME DEFAULT now()
    `status` ENUM('pending','approved' ,'cancelled') NOT NULL DEFAULT 'pending'
);

create table orderDetalis(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    `order_id` int UNSIGNED,
    `product_id` int UNSIGNED,

    FOREIGN KEY(order_id) REFERENCES orders(id) ON DELETE SET NULL,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE SET NULL
);

CREATE TABLE admins(
    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
    `name` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `is_super` ENUM('yes' , 'no') default 'no',
    `email` VARCHAR(255) not NULL,
    `created_at` DATETIME DEFAULT NOW()
);


 