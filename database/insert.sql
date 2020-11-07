use grupo04;

insert into licencias(descripcion)
values('B1'),
('B2'),
('C1'),
('C2'),
('C3');

insert into roles(descripcion)
values('chofer'),
('supervisor'),
('taller'),
('administrador');

insert into empleados(nombre, apellido, dni, fecha_nacimiento, licencia_id)
value('admin', 'administrador', 40123456, '1997-01-01', 3);

insert into users(email, password, rol_id, empleado_id)
value('admin@logistica.com', MD5('admin'), 4, 1);