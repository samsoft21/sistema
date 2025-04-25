CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(20) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    monto DECIMAL(10,2) NOT NULL
);

INSERT INTO clientes (cedula, nombre, monto) VALUES
('1718144320', 'Sandra Bueno', 349.00),
('1713274577', 'Adriel Fernando Mena Bueno', 100.00);