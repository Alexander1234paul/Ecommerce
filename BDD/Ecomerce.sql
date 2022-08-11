/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     10/8/2022 9:29:34                            */
/*==============================================================*/


drop table if exists TBL_CATEGORIAS;

drop table if exists TBL_CLIENTES;

drop table if exists TBL_DETALLE_FACTURAS;

drop table if exists TBL_EMPRESA;

drop table if exists TBL_FACTURAS;

drop table if exists TBL_PERSONAS;

drop table if exists TBL_PRODUCTOS;

drop table if exists TBL_USUARIOS;

/*==============================================================*/
/* Table: TBL_CATEGORIAS                                        */
/*==============================================================*/
create table TBL_CATEGORIAS
(
   ID_CATEGORIA         int not null auto_increment,
   TBL_ID_CATEGORIA     int,
   CATEGORIA            varchar(50),
   primary key (ID_CATEGORIA)
);

/*==============================================================*/
/* Table: TBL_CLIENTES                                          */
/*==============================================================*/
create table TBL_CLIENTES
(
   ID_CLIENTE           int not null auto_increment,
   ID_PERSONA           int,
   CEDULA               varchar(100),
   TELEFONO             varchar(10),
   DIRECCION            varchar(100),
   primary key (ID_CLIENTE)
);

/*==============================================================*/
/* Table: TBL_DETALLE_FACTURAS                                  */
/*==============================================================*/
create table TBL_DETALLE_FACTURAS
(
   ID_DETALLE_FACTURA   int not null auto_increment,
   ID_FACTURA           int,
   ID_PRODUCTO          int,
   CANTIDAD             int,
   PRECIO               double,
   SUB_TOTAL            double,
   primary key (ID_DETALLE_FACTURA)
);

/*==============================================================*/
/* Table: TBL_EMPRESA                                           */
/*==============================================================*/
create table TBL_EMPRESA
(
   ID_EMPRESA           int not null auto_increment,
   CI_RUC               varchar(13),
   NOMBRE_COMERCIAL     varchar(50),
   TELEFONO             char(10),
   DIRECCION            char(10),
   primary key (ID_EMPRESA)
);

/*==============================================================*/
/* Table: TBL_FACTURAS                                          */
/*==============================================================*/
create table TBL_FACTURAS
(
   ID_FACTURA           int not null auto_increment,
   ID_EMPRESA           int,
   ID_CLIENTE           int,
   FECHA                datetime,
   IVA                  double,
   TOTAL                double,
   ESTADO               boolean,
   primary key (ID_FACTURA)
);

/*==============================================================*/
/* Table: TBL_PERSONAS                                          */
/*==============================================================*/
create table TBL_PERSONAS
(
   ID_PERSONA           int not null auto_increment,
   NOMBRES              varchar(50),
   APELLIDOS            varchar(50),
   EMAIL                varchar(50),
   PASS                 char(10),
   primary key (ID_PERSONA)
);

/*==============================================================*/
/* Table: TBL_PRODUCTOS                                         */
/*==============================================================*/
create table TBL_PRODUCTOS
(
   ID_PRODUCTO          int not null auto_increment,
   ID_CATEGORIA         int,
   MARCA                varchar(25),
   MODELO               varchar(25),
   SERIE                varchar(50),
   DESCRIPCION          varchar(100),
   PRECIO_COMPRA        double,
   PRECIO_VENTA         double,
   STOCK                int,
   ESTADO               boolean,
   primary key (ID_PRODUCTO)
);

/*==============================================================*/
/* Table: TBL_USUARIOS                                          */
/*==============================================================*/
create table TBL_USUARIOS
(
   ID_USUARIO           int not null auto_increment,
   ID_PERSONA           int,
   primary key (ID_USUARIO)
);

alter table TBL_CATEGORIAS add constraint FK_REFERENCE_29 foreign key (TBL_ID_CATEGORIA)
      references TBL_CATEGORIAS (ID_CATEGORIA) on delete restrict on update restrict;

alter table TBL_CLIENTES add constraint FK_REFERENCE_3 foreign key (ID_PERSONA)
      references TBL_PERSONAS (ID_PERSONA) on delete restrict on update restrict;

alter table TBL_DETALLE_FACTURAS add constraint FK_REFERENCE_6 foreign key (ID_FACTURA)
      references TBL_FACTURAS (ID_FACTURA) on delete restrict on update restrict;

alter table TBL_DETALLE_FACTURAS add constraint FK_REFERENCE_7 foreign key (ID_PRODUCTO)
      references TBL_PRODUCTOS (ID_PRODUCTO) on delete restrict on update restrict;

alter table TBL_FACTURAS add constraint FK_REFERENCE_5 foreign key (ID_EMPRESA)
      references TBL_EMPRESA (ID_EMPRESA) on delete restrict on update restrict;

alter table TBL_FACTURAS add constraint FK_REFERENCE_8 foreign key (ID_CLIENTE)
      references TBL_CLIENTES (ID_CLIENTE) on delete restrict on update restrict;

alter table TBL_PRODUCTOS add constraint FK_REFERENCE_4 foreign key (ID_CATEGORIA)
      references TBL_CATEGORIAS (ID_CATEGORIA) on delete restrict on update restrict;

alter table TBL_USUARIOS add constraint FK_REFERENCE_2 foreign key (ID_PERSONA)
      references TBL_PERSONAS (ID_PERSONA) on delete restrict on update restrict;

