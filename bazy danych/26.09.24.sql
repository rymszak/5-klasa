ddl - update, select, delete - na kartkówke
DML - data manipulation language
DCL - język kontroli danych grant revoke (przydzielanie uprawnień)
TCL - jezyk kontroli tranzakcji - commit, start transaction, begin transaction (odwrócenie tranzakcji)
DQL - nie trzeba
predykaty - between distinct like and or itd - warunek który jest prawdziwy nieprawdziwy lub nieznany

  between zakres wartości kolumny
  select nazwa,cena_jednostkowa,ilosc_w_jednosce from produkty where cena_jednostkowa between 100 and 130

  in 
  select nazwa,cena,ilosc from produkty where kategoria_id in (2,3) and ilosc>70

  distinct - niepowtarzające się
  select distinct kraj from procucent

  exists - ograniczenie dodatkowym warunkiem
  select nazwa from produkty where exists(select nazwa from produkty where produkt.producent_id=producent.id and cena<10);
  exists zwraca true albo false

  not -przeczenia
  select nazwa from producent where not kraj like "%Nie"

  like
  select nazwa from producent where not kraj like "%Nie"
(wielkość znaki mają znaczenie)

  and
  select kolumna from tabela where warunek and warynek or warunek
  select nazwa from produkt where cena<30 and ilosc>50
    
  or
  select kolumna from tabela where warunek and warynek or warunek

  select nazwisko from klienci where nazwisko like "%ek" or nazwisko like "%ak"


zadanka
  SELECT produkt.nazwa FROM produkt WHERE produkt.ilosc between 67 and 68;
SELECT produkt.nazwa,produkt.kategoria_id FROM produkt WHERE produkt.cena between 100 and 150 and kategoria_id in (1,5,28);
SELECT DISTINCT produkt.kategoria_id FROM produkt WHERE produkt.nazwa like "%0" and produkt.cena>1900;
SELECT klient.miejscowosc FROM klient WHERE klient.ulica like "R%";
SELECT pracownik.nazwisko,pracownik.numer FROM pracownik where pracownik.numer like "6%" and pracownik.numer like "%5";
SELECT transakcja.data, pracownik_id,klient_id from transakcja where transakcja.pracownik_id in (10,20) and transakcja.klient_id in (10,20) and transakcja.pracownik_id=transakcja.klient_id;;
SELECT produkt.nazwa,produkt.ilosc from produkt where produkt.ilosc not BETWEEN 2 and 99;
SELECT transakcja.data from transakcja join klient on klient.id=transakcja.klient_id where klient.miejscowosc like "P%" and klient.ulica like "K%";
