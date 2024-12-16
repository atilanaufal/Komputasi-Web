CREATE TABLE UserAcc(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255),
	email VARCHAR(255) UNIQUE,
	password VARCHAR(255)
);

CREATE TABLE TrackingData(
	track_id INT PRIMARY KEY AUTO_INCREMENT,
   	user_id INT,
	awb CHAR(100),
	courier VARCHAR(100),
	status VARCHAR(100),
	origin TEXT,
	destination TEXT,
	shipper VARCHAR(255),
	receiver VARCHAR(255),
	date TEXT,
	description TEXT,
	location TEXT,
 	FOREIGN KEY (user_id) REFERENCES UserAcc(id)
);
