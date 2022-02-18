CREATE TABLE guestbook (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    visitor_name VARCHAR(255) NOT NULL,
    note TEXT NULL,
    created_at DATETIME DEFAULT now()
);

CREATE TABLE User (
    staffId INT NOT NULL PRIMARY KEY,
    staffName VARCHAR(255) NOT NULL,
    phoneNumber INT NOT NULL
);