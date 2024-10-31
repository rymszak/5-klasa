constraint check>1889 in(wiek)
plec enum ('M','K')
plec char(3) check(plec in('M','K')) 
eyecolor enum('BR','GR','BL')

first-na koniec zmeinnej w tabeli i daje ją na początek
alter table preson add wiek int first; - daje kolumne wiek na początek
after dodaje po kolmnie
alter table preson add wiek int after(kolumna)

w strukturze mozna usunąć klucze
klucze obce to index w strukturze

dodać pesel i plec
alter table add plec enum('M','K')
alter table klient add pesel int(11) after nazwisko;
