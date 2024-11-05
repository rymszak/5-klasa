przy towrzeniu baz pamiętac o atrybutach 
alter table add nazwa


alter table tabela1 rename rzeczy;
alter table pasazer add wiek int not null default null;
alter table pasazer add (wiek int,plec varchar(1));

alter table pasazer modify plec varchar(20) not null;
alter table pasazer change wiek ilelat int;
alter table pasazer add kolumna_id int auto_increment primary key 
alter table pasazer drop column ilelat;
truncate usuwa id z auto increment
  alter table truncate nazwa where ...
alter table pasazer rename to pasazerowie;
alter database nazwa_bazwy character set utf8 collate rodzaj kodowania
alter table nazwaTabeli character set utf8 collate rodzaj kodowania;
alter table nazwaTabeli convert to character set utf8 collate rodzaj kodowania;
alter table rzeczy drop primary key id
alter table rzeczy modify id not null, add primary key(id);
alter table osoba add column plec after wiek
alter table osoba add column count smallint(6) not null after nazwisko;















create DATABASE księgarnia;
CREATE TABLE autor( `id_autora` int AUTO_INCREMENT PRIMARY KEY, `nazwisko` varchar(50), `imie` varchar(50));
CREATE TABLE wydawnictwo( `id_wydawnictwa` int AUTO_INCREMENT PRIMARY KEY not null, `nazwa` varchar(50));
CREATE TABLE faktura( `id_faktury` int AUTO_INCREMENT PRIMARY KEY not null, `nr_faktury` varchar(50), `sposob_platnosci` varchar(50), `data_wystawienia` datetime);
CREATE TABLE klient( `id_klienta` INT AUTO_INCREMENT PRIMARY KEY NOT NULL, `imie` VARCHAR(50), `nazwisko` VARCHAR(50), `miejscowosc` varchar(50), `kod_pocztowy` varchar(6), `ulica` varchar(50), `nr_domu` varchar(7), `telefon` varchar(12), `e_mail` varchar(50));
CREATE TABLE ksiazki(
    `id_ksiazki` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `tytul` VARCHAR(100),
    `id_autora` INT,
    `cena` decimal(6,2),
    `id_wydawnictwa` INT,
    `rok_wydania` INT,
    FOREIGN KEY(id_autora) REFERENCES autor(id_autora)
    on delete cascade,
    FOREIGN KEY(id_wydawnictwa) REFERENCES wydawnictwo(id_wydawnictwa)
    on update CASCADE
);
CREATE TABLE zamowienia(
    `id_zamowienia` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `id_klienta` INT,
    `data_zamowienia` DATETIME,
    `data_wyslania` DATETIME,
    `koszt_wysylki` decimal(6,2),
    `id_faktury` INT,
    FOREIGN KEY(id_faktury) REFERENCES faktura(id_faktury)
    on delete CASCADE,
    FOREIGN KEY(id_klienta) REFERENCES klient(id_klienta)
    on update restrict
);
CREATE TABLE `szczegoly zamowienia`(
    `id_zamowienia` INT,
    `id_ksiazki` INT,
    `ilosc` INT,
    FOREIGN KEY(id_zamowienia) REFERENCES zamowienia(id_zamowienia)
    on UPDATE CASCADE,
    FOREIGN KEY(id_ksiazki) REFERENCES ksiazki(id_ksiazki)
    on DELETE set null
);



4)

insert into autor(`imie`,`nazwisko`) values("Stephen","King");
insert into autor(`imie`,`nazwisko`) values("J.R.R","Tolkien");
insert into autor(`imie`,`nazwisko`) values("Haruki","Nurakami");
insert into autor(`imie`,`nazwisko`) values("Jacek","Dukaj");
insert into autor(`imie`,`nazwisko`) values("Marcus","Zusak");
insert into autor(`imie`,`nazwisko`) values("Veronica","Roth");
insert into autor(`imie`,`nazwisko`) values("Jacek","Piekara");
insert into autor(`imie`,`nazwisko`) values("Fiodor","Dostojewski");
insert into autor(`imie`,`nazwisko`) values("Stanisław","Lem");
insert into autor(`imie`,`nazwisko`) values("Lee","Child");
insert into autor(`imie`,`nazwisko`) values("J.K","Rowling");
insert into klient (imie,nazwisko,miejscowosc,kod_pocztowy,ulica,nr_domu,telefon,e_mail) values("kamil","rymsza","kleszczow","44-164","sosnowa","12","098433123","jakismail@gmail.com");
insert into klient (imie,nazwisko,miejscowosc,kod_pocztowy,ulica,nr_domu,telefon,e_mail) values("Dawid","stepein","gliwice","44-100","chorzowska","5","213546789","jakismail2@gmail.com")
insert into wydawnictwo (nazwa) values("WAM");
insert into wydawnictwo (nazwa) values("Wolne lektury");
insert into wydawnictwo (nazwa) values("Onepress");
insert into wydawnictwo (nazwa) values("Waneko");
insert into wydawnictwo (nazwa) values("Skrzat");
insert into wydawnictwo (nazwa) values("Elipsa");
insert into wydawnictwo (nazwa) values("Yen Press");
insert into wydawnictwo (nazwa) values("Filia");
insert into wydawnictwo (nazwa) values("Agora");
insert into wydawnictwo (nazwa) values("Wydawnictwo Poznańskie");
insert into ksiazki(id_autora,id_wydawnictwa,rok_wydania,cena,tytul) values(2,2,1972,"12.10","Hobbit");
insert into ksiazki(id_autora,id_wydawnictwa,rok_wydania,cena,tytul) values(4,1,1999,"70.12","Carrie");
insert into ksiazki(id_autora,id_wydawnictwa,rok_wydania,cena,tytul) values(3,4,1812,"35.99","Przygoda z Owcą");
insert into ksiazki(id_autora,id_wydawnictwa,rok_wydania,cena,tytul) values(3,7,1812,"49.99","Przygoda z Owcą");
insert into faktura(nr_faktury,sposob_platnosci,data_wystawienia) values("14/FAN502154","przelew","2021-10-10");
insert into faktura(faktura.nr_faktury,faktura.sposob_platnosci,faktura.data_wystawienia) VALUES("14/FAN502155","gotówka","2021-01-07");
insert into faktura(faktura.nr_faktury,faktura.sposob_platnosci,faktura.data_wystawienia) VALUES("14/FAN502156","gotówka","2021-01-08");
insert into faktura(faktura.nr_faktury,faktura.sposob_platnosci,faktura.data_wystawienia) VALUES("14/FAN502157","przelew","2021-01-08");
insert into faktura(faktura.nr_faktury,faktura.sposob_platnosci,faktura.data_wystawienia) VALUES("14/FAN502143","gotówka","2021-01-10");
insert into faktura(faktura.nr_faktury,faktura.sposob_platnosci,faktura.data_wystawienia) VALUES("14/FAN502167","gotówka","2022-02-03");
insert into `szczegoly zamowienia`(id_ksiazki,ilosc) values(2,2);
insert into `szczegoly zamowienia`(id_ksiazki,ilosc) values(4,1);
insert into `szczegoly zamowienia`(id_ksiazki,ilosc) values(2,1);
insert into `szczegoly zamowienia`(id_ksiazki,ilosc) values(2,1);
insert into `szczegoly zamowienia`(id_ksiazki,ilosc) values(1,1);
insert into `szczegoly zamowienia`(id_ksiazki,ilosc) values(5,1);


insert into zamowienia(zamowienia.id_klienta,zamowienia.koszt_wysylki,zamowienia.id_faktury) VALUES(2,"10",2);
insert into zamowienia(zamowienia.id_klienta,zamowienia.koszt_wysylki,zamowienia.id_faktury) VALUES(2,"10",3);
insert into zamowienia(zamowienia.id_klienta,zamowienia.koszt_wysylki,zamowienia.id_faktury) VALUES(1,"17",4);
insert into zamowienia(zamowienia.id_klienta,zamowienia.koszt_wysylki,zamowienia.id_faktury) VALUES(1,"17",5);
insert into zamowienia(zamowienia.id_klienta,zamowienia.koszt_wysylki,zamowienia.id_faktury) VALUES(3,"20",6);

insert into zamowienia(zamowienia.id_klienta,zamowienia.koszt_wysylki,zamowienia.id_faktury) VALUES(3,"20",7);
wyrzuca błąd z powodu blokady kaskady na zamówieniach

alter table klient add plec enum('M','K') after nazwisko;
update klient set plec='M' where id_klienta=3;
update klient set plec='D' where id_klienta=4;

gdy wpiszemy coś innego niż M lub K zostanie wypisane ""

update zamowienia set zamowienia.koszt_wysylki="12.99" where zamowienia.koszt_wysylki="10.00";
update `szczegoly zamowienia` set id_zamowienia=1 where `szczegoly zamowienia`.`id_ksiazki`=2;
