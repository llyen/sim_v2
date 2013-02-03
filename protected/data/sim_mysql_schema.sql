create table units (
id int NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
address varchar(255),
PRIMARY KEY (id)
);

create table users (
id int NOT NULL AUTO_INCREMENT,
unit_id int,
username varchar(100) NOT NULL,
password varchar(100) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (unit_id) REFERENCES units(id) ON DELETE NO ACTION
);

create table objects (
id int NOT NULL AUTO_INCREMENT,
unit_id int,
name varchar(100) NOT NULL,
address varchar(255) NOT NULL,
# charakterystyka obiektu
PRIMARY KEY (id),
FOREIGN KEY (unit_id) REFERENCES units(id) ON DELETE NO ACTION
);

create table collection_points (
id int NOT NULL AUTO_INCREMENT,
object_id int NOT NULL,
symbol varchar(255),
multiplicand decimal(10,4),
PRIMARY KEY (id),
FOREIGN KEY (object_id) REFERENCES objects(id) ON DELETE NO ACTION
);

create table tariffs_types (
id int NOT NULL AUTO_INCREMENT,
type varchar(255) NOT NULL,
PRIMARY KEY (id)
);

create table tariffs_components_types (
id int NOT NULL AUTO_INCREMENT,
type varchar(255) NOT NULL,
PRIMARY KEY (id)
);

create table mediums (
id int NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL,
PRIMARY KEY (id)
);

create table suppliers (
id int NOT NULL AUTO_INCREMENT,
medium_id int,
name varchar(150),
address varchar(255),
PRIMARY KEY (id),
FOREIGN KEY (medium_id) REFERENCES mediums(id) ON DELETE NO ACTION
);

create table tariffs (
id int NOT NULL AUTO_INCREMENT,
type_id int NOT NULL,
supplier_id int,
name varchar(255) NOT NULL,
mandatory_date DATE,
PRIMARY KEY (id),
FOREIGN KEY (type_id) REFERENCES tariffs_types(id) ON DELETE NO ACTION,
FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE NO ACTION
);

create table tariffs_components (
id int NOT NULL AUTO_INCREMENT,
tariff_id int NOT NULL,
type_id int NOT NULL,
medium_id int NOT NULL,
name varchar(255) NOT NULL,
unit varchar(10),
mandatory_date date,
price_per_unit decimal(10,4),
vat int,
multiplier decimal(10,4),
archival boolean,
PRIMARY KEY (id),
FOREIGN KEY (tariff_id) REFERENCES tariffs(id) ON DELETE NO ACTION,
FOREIGN KEY (type_id) REFERENCES tariffs_components_types(id) ON DELETE NO ACTION,
FOREIGN KEY (medium_id) REFERENCES mediums(id) ON DELETE NO ACTION
);

create table other_connections (
id int NOT NULL AUTO_INCREMENT,
medium_id int NOT NULL,
unit varchar(10),
`use` decimal(10,4),
PRIMARY KEY (id),
FOREIGN KEY (medium_id) REFERENCES mediums(id) ON DELETE NO ACTION
);

create table invoices (
id int NOT NULL AUTO_INCREMENT,
tariff_id int NOT NULL,
object_id int NOT NULL,
supplier_id int NOT NULL,
period_since date,
period_to date,
issue_date date,
PRIMARY KEY (id),
FOREIGN KEY (tariff_id) REFERENCES tariffs(id) ON DELETE NO ACTION,
FOREIGN KEY (object_id) REFERENCES objects(id) ON DELETE NO ACTION,
FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE NO ACTION
);

create table invoices_data (
id int NOT NULL AUTO_INCREMENT,
invoice_id int NOT NULL,
component_id int NOT NULL,
value decimal(10,4),
PRIMARY KEY (id),
FOREIGN KEY (invoice_id) REFERENCES invoices(id) ON DELETE CASCADE,
FOREIGN KEY (component_id) REFERENCES tariffs_components(id) ON DELETE NO ACTION
# reszta danych
);

create table counters (
id int NOT NULL AUTO_INCREMENT,
collection_point_id int NOT NULL,
medium_id int NOT NULL,
symbol varchar(255) NOT NULL,
unit varchar(10) NOT NULL,
initial_state decimal(10,4),
installation_date date,
archival boolean,
PRIMARY KEY (id),
FOREIGN KEY (collection_point_id) REFERENCES collection_points(id) ON DELETE NO ACTION,
FOREIGN KEY (medium_id) REFERENCES mediums(id) ON DELETE NO ACTION
);

create table counters_readings (
id int NOT NULL AUTO_INCREMENT,
counter_id int NOT NULL,
reading_date date NOT NULL,
counter_state decimal(10,4) NOT NULL,
`use` decimal(10,4) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (counter_id) REFERENCES counters(id) ON DELETE NO ACTION
);

create table `AuthItem`
(
   `name`                 varchar(64) not null,
   `type`                 integer not null,
   `description`          text,
   `bizrule`              text,
   `data`                 text,
   primary key (`name`)
) engine InnoDB;

create table `AuthItemChild`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`,`child`),
   foreign key (`parent`) references `AuthItem` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `AuthAssignment`
(
   `itemname`             varchar(64) not null,
   `userid`               varchar(100) not null,
   `bizrule`              text,
   `data`                 text,
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;
