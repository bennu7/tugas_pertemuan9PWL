    CREATE TABLE tb_biodata ( 
    id int auto_increment,
    nama VARCHAR(100) NOT NULL,  
    alamat VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
    );

    INSERT INTO tb_biodata VALUES
    ('', 'bennu', 'indonesia'),
    ('', 'deri', 'tanjung');