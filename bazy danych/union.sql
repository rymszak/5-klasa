select klienci.imie,klienci.nazwisko, 'klient'as 'kto' from klienci 
union
select pracownicy.imie,pracownicy.nazwisko, 'pracownik' from pracownicy
union łączy pionowo i potrzebuje tyle samo kolumn

  select ...
  intersect
select ...
  intersect-usunięcie z tabeli
