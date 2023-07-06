create DATABASE app;
use app;
-- TABLE TASKS
CREATE TABLE tareas (
    id  INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    estado TINYINT(4),
)