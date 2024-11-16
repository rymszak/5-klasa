
# Uprawnienia dla `administrator`@`%`

GRANT USAGE ON *.* TO `administrator`@`%`;

GRANT ALL PRIVILEGES ON `przychodnia`.* TO `administrator`@`%`;


# Uprawnienia dla `lekarz`@`%`

GRANT USAGE ON *.* TO `lekarz`@`%`;

GRANT SELECT ON `przychodnia`.`pacjenci` TO `lekarz`@`%`;

GRANT SELECT ON `przychodnia`.`lekarze` TO `lekarz`@`%`;

GRANT SELECT, INSERT ON `przychodnia`.`wizyty` TO `lekarz`@`%`;


# Uprawnienia dla `pacjenci`@`%`

GRANT USAGE ON *.* TO `pacjenci`@`%`;


# Uprawnienia dla `pielegniarka`@`%`

GRANT USAGE ON *.* TO `pielegniarka`@`%`;


# Uprawnienia dla `pracownicy`@`%`

GRANT USAGE ON *.* TO `pracownicy`@`%`;

GRANT SELECT ON `przychodnia`.`wizyty` TO `pracownicy`@`%`;

GRANT SELECT, INSERT, DELETE ON `przychodnia`.`pacjenci` TO `pracownicy`@`%`;

GRANT SELECT ON `przychodnia`.`konta` TO `pracownicy`@`%`;
