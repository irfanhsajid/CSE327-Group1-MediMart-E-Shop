CREATE TABLE Books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(255) NOT NULL,
    book_price DECIMAL(10, 2) NOT NULL,
    book_type VARCHAR(50) NOT NULL,
    book_quantity_new INT NOT NULL,
    book_quantity_used INT NOT NULL,
    book_details TEXT,
    user_id INT,
    admin_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id), -- Assuming Users table
    FOREIGN KEY (admin_id) REFERENCES Admins(admin_id) -- Assuming Admins table
);
