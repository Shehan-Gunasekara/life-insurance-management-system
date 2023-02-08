create table Manager(
M_ID char(6),
NIC char(10),
M_FirstName varchar(20),
M_LastName varchar(20),
password char(20),
constraint Manager_PK primary key(M_ID)
);

Create Table Agent(
A_ID char(8),
NIC char(10),
A_Frist_Name varchar(25),
A_Last_Name varchar(20),
Password varchar(30),
imgName varchar(100),
constraint Agent_PK PRIMARY KEY(A_ID)
);

insert into Manager
values('LIM001' , '987002345v' , 'DILAN' , 'FERNANDO' , 'FERdilan' );
insert into Manager
values('LIM002' , '998745677v' , 'KASUN' , 'SILVA' , '200kasun' );
insert into Manager
values('LIM003' , '890012334v' , 'AMALI' , 'FERNANDO' , '8900AMA' );
insert into Manager
values('LIM004' , '907720078v' , 'DINUKA' , 'PERERA' , '90DINU' );
insert into Manager
values('LIM005' , '956789978v' , 'SHANI' , 'COSTA' , '95sha' );

insert into Agent values('AG456123' , '956821457V' , 'Nuwan' , 'Amarasekara' ,'hgejh@#$2563' );
insert into Agent values('AG456124' , '956821455V' , 'Amal' , 'Gunathilaka' ,'1632454@#G' );
insert into Agent values('AG456125' , '946821456V' , 'Gayantha' , 'Perera' ,'hxzcjz25#$@' );
insert into Agent values('AG456131' , '946821468V' , 'Lasantha' , 'Ranawaka' ,'coc12546@#$' );
insert into Agent values('AG456254' , '975821466V' , 'Chamath' , 'Ranawaka' ,'chTH12846@#*' );