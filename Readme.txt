
CREATE TABLE contenido
(
    IdConetido INT NOT NULL,
    id INT NOT NULL,
    titulo varchar(50),
    texto varchar(100),
    PRIMARY KEY(IdConetido),
    INDEX (id),
    FOREIGN KEY (id) REFERENCES admin(id)
)

#Inner join a la tabla
SELECT * FROM admin t1
INNER JOIN contenido t2 ON t1.id=t2.id