CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    message TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES donors(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES requesters(id) ON DELETE CASCADE
);
