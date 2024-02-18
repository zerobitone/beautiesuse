USE db;

-- Users can register to receive information; they can see more than those who are not registered and can receive newsletters
CREATE TABLE IF NOT EXISTS users
(
    id             INT PRIMARY KEY AUTO_INCREMENT,
    user_lastname  VARCHAR(255),
    user_firstname VARCHAR(255),
    email          VARCHAR(255),
    password       VARCHAR(250),
    phone          VARCHAR(250),
    avatar_path    VARCHAR(255),
    created        DATETIME,
    modified       DATETIME
);

CREATE TABLE IF NOT EXISTS user_addresses
(
    user_id              INT PRIMARY KEY AUTO_INCREMENT,
    street_address_line1 VARCHAR(255),
    street_address_line2 VARCHAR(255),
    city                 VARCHAR(100),
    state_province       VARCHAR(50),
    postal_code          VARCHAR(20),
    country              VARCHAR(100),
    created              DATETIME,
    modified             DATETIME,
    FOREIGN KEY (user_id) REFERENCES users (id)
);

-- Official in charge
CREATE TABLE IF NOT EXISTS accounting_clerks
(
    clerk_id        INT PRIMARY KEY AUTO_INCREMENT,
    clerk_lastname  VARCHAR(255),
    clerk_firstname VARCHAR(255),
    email           VARCHAR(255),
    password        VARCHAR(250),
    phone           VARCHAR(250),
    avatar_path     VARCHAR(255),
    created         DATETIME,
    modified        DATETIME
);

-- Social security, health insurance companies, payers
CREATE TABLE IF NOT EXISTS social_insurance_providers
(
    social_insurance_provider_id   INT PRIMARY KEY AUTO_INCREMENT,
    social_insurance_provider_name VARCHAR(255),
    avatar_path                    VARCHAR(255),
    created                        DATETIME,
    modified                       DATETIME
);

-- Recipients are specific applicants and already have a clerk
CREATE TABLE IF NOT EXISTS recipients
(
    id                           INT PRIMARY KEY AUTO_INCREMENT,
    recipient_title              VARCHAR(10),
    recipient_first_name         VARCHAR(50),
    recipient_last_name          VARCHAR(50),
    company_name                 VARCHAR(255),
    email                        VARCHAR(255),
    password                     VARCHAR(250),
    phone                        VARCHAR(250),
    avatar_path                  VARCHAR(255),
    created                      DATETIME,
    modified                     DATETIME,
    accounting_clerk_id          INT,
    social_insurance_provider_id INT,
    FOREIGN KEY (accounting_clerk_id) REFERENCES accounting_clerks (clerk_id),
    FOREIGN KEY (social_insurance_provider_id) REFERENCES social_insurance_providers (social_insurance_provider_id)
);

CREATE TABLE IF NOT EXISTS recipient_addresses
(
    recipient_id         INT PRIMARY KEY AUTO_INCREMENT,
    street_address_line1 VARCHAR(255),
    street_address_line2 VARCHAR(255),
    city                 VARCHAR(100),
    state_province       VARCHAR(50),
    postal_code          VARCHAR(20),
    country              VARCHAR(100),
    created              DATETIME,
    modified             DATETIME,
    FOREIGN KEY (recipient_id) REFERENCES recipients (id)
);

CREATE TABLE IF NOT EXISTS recipients_contact_details
(
    recipient_id INT PRIMARY KEY AUTO_INCREMENT,
    email        VARCHAR(255),
    phone        VARCHAR(250),
    created      DATETIME,
    modified     DATETIME,
    FOREIGN KEY (recipient_id) REFERENCES recipients (id)
);

-- Rehabilitation centers
CREATE TABLE IF NOT EXISTS rehab_facilities
(
    facility_id          INT PRIMARY KEY AUTO_INCREMENT,
    street_address_line1 VARCHAR(255),
    street_address_line2 VARCHAR(255),
    city                 VARCHAR(100),
    state_province       VARCHAR(50),
    postal_code          VARCHAR(20),
    country              VARCHAR(100),
    avatar_path          VARCHAR(255),
    created              DATETIME,
    modified             DATETIME,
    email                VARCHAR(255),
    password             VARCHAR(250),
    phone                VARCHAR(250)
);

CREATE TABLE IF NOT EXISTS rehab_facilities_login
(
    facility_id INT PRIMARY KEY AUTO_INCREMENT,
    last_login  DATETIME,
    created     DATETIME,
    modified    DATETIME,
    FOREIGN KEY (facility_id) REFERENCES rehab_facilities (facility_id)
);

CREATE TABLE IF NOT EXISTS rehab_facilities_registration
(
    facility_id       INT PRIMARY KEY,
    registration_date DATETIME,
    created           DATETIME,
    modified          DATETIME,
    FOREIGN KEY (facility_id) REFERENCES rehab_facilities (facility_id)
);

CREATE TABLE IF NOT EXISTS recipients_accounting_clerks
(
    recipient_id INT,
    clerk_id     INT,
    PRIMARY KEY (recipient_id),
    created      DATETIME,
    modified     DATETIME,
    FOREIGN KEY (recipient_id) REFERENCES recipients (id),
    FOREIGN KEY (clerk_id) REFERENCES accounting_clerks (clerk_id)
);

CREATE TABLE IF NOT EXISTS accounting_clerks_social_insurance_providers
(
    clerk_id                     INT PRIMARY KEY,
    social_insurance_provider_id INT,
    created                      DATETIME,
    modified                     DATETIME,
    FOREIGN KEY (clerk_id) REFERENCES accounting_clerks (clerk_id),
    FOREIGN KEY (social_insurance_provider_id) REFERENCES social_insurance_providers (social_insurance_provider_id)
);

CREATE TABLE IF NOT EXISTS accounting_clerks_contact_details
(
    clerk_id INT PRIMARY KEY,
    email    VARCHAR(255),
    phone    VARCHAR(250),
    created  DATETIME,
    modified DATETIME,
    FOREIGN KEY (clerk_id) REFERENCES accounting_clerks (clerk_id)
);

CREATE TABLE IF NOT EXISTS social_insurance_providers_recipients
(
    social_insurance_provider_id INT,
    recipient_id                 INT,
    PRIMARY KEY (social_insurance_provider_id, recipient_id),
    created                      DATETIME,
    modified                     DATETIME,
    FOREIGN KEY (social_insurance_provider_id) REFERENCES social_insurance_providers (social_insurance_provider_id),
    FOREIGN KEY (recipient_id) REFERENCES recipients (id)
);

CREATE TABLE IF NOT EXISTS social_insurance_providers_contact_details
(
    social_insurance_provider_id INT PRIMARY KEY,
    email                        VARCHAR(255),
    phone                        VARCHAR(250),
    created                      DATETIME,
    modified                     DATETIME,
    FOREIGN KEY (social_insurance_provider_id) REFERENCES social_insurance_providers (social_insurance_provider_id)
);

-- Doctors who referred their patients
CREATE TABLE IF NOT EXISTS doctors
(
    doctor_id        INT PRIMARY KEY AUTO_INCREMENT,
    doctor_lastname  VARCHAR(255),
    doctor_firstname VARCHAR(255),
    email            VARCHAR(255),
    password         VARCHAR(250),
    phone            VARCHAR(250),
    avatar_path      VARCHAR(255),
    created          DATETIME,
    modified         DATETIME
);

CREATE TABLE IF NOT EXISTS doctors_recipients
(
    doctor_id     INT,
    recipient_id  INT,
    referral_date DATETIME,
    created       DATETIME,
    modified      DATETIME,
    PRIMARY KEY (doctor_id, recipient_id),
    FOREIGN KEY (doctor_id) REFERENCES doctors (doctor_id),
    FOREIGN KEY (recipient_id) REFERENCES recipients (id)
);

CREATE TABLE IF NOT EXISTS doctors_login
(
    doctor_id  INT PRIMARY KEY,
    last_login DATETIME,
    created    DATETIME,
    modified   DATETIME,
    FOREIGN KEY (doctor_id) REFERENCES doctors (doctor_id)
);

CREATE TABLE IF NOT EXISTS doctors_registration
(
    doctor_id         INT PRIMARY KEY,
    registration_date DATETIME,
    created           DATETIME,
    modified          DATETIME,
    FOREIGN KEY (doctor_id) REFERENCES doctors (doctor_id)
);

-- Types of rehabilitation
CREATE TABLE IF NOT EXISTS rehab_types
(
    type_id     INT PRIMARY KEY AUTO_INCREMENT,
    type_name   VARCHAR(255),
    description TEXT,
    created     DATETIME,
    modified    DATETIME
);

-- Recipients <-> rehab_types (M:N relationship)
CREATE TABLE IF NOT EXISTS recipients_rehab_types
(
    recipient_id INT,
    type_id      INT,
    PRIMARY KEY (recipient_id, type_id),
    created      DATETIME,
    modified     DATETIME,
    FOREIGN KEY (recipient_id) REFERENCES recipients (id),
    FOREIGN KEY (type_id) REFERENCES rehab_types (type_id)
);

-- Rehabilitation stay
CREATE TABLE IF NOT EXISTS rehab_stays
(
    stay_id                      INT PRIMARY KEY AUTO_INCREMENT,
    recipient_id                 INT,
    social_insurance_provider_id INT,
    facility_id                  INT,
    status                       ENUM ('in process', 'rejected', 'approved') DEFAULT 'in process',
    start_date                   DATE,
    end_date                     DATE,
    length_of_stay               INT,
    created                      DATETIME,
    modified                     DATETIME,
    FOREIGN KEY (recipient_id) REFERENCES recipients (id),
    FOREIGN KEY (social_insurance_provider_id) REFERENCES social_insurance_providers (social_insurance_provider_id),
    FOREIGN KEY (facility_id) REFERENCES rehab_facilities (facility_id)
);

-- Connection table between rehab_stays and rehab_types
CREATE TABLE IF NOT EXISTS rehab_stays_types
(
    stay_id  INT,
    type_id  INT,
    PRIMARY KEY (stay_id, type_id),
    created  DATETIME,
    modified DATETIME,
    FOREIGN KEY (stay_id) REFERENCES rehab_stays (stay_id),
    FOREIGN KEY (type_id) REFERENCES rehab_types (type_id)
);

-- Trigger for updating rehab_stays status
DELIMITER //
CREATE TRIGGER before_update_rehab_stays
    BEFORE UPDATE
    ON rehab_stays
    FOR EACH ROW
BEGIN
    IF NEW.status <> OLD.status AND NEW.status NOT IN ('in process', 'rejected', 'approved') THEN
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Status can only be updated by accounting clerks';
    END IF;
END;
//
DELIMITER ;

-- Procedure for updating rehab_stays status
DELIMITER //

CREATE PROCEDURE update_rehab_stays_status(
    IN p_stay_id INT,
    IN p_new_status ENUM ('in process', 'rejected', 'approved'),
    IN p_updated_by_accounting_clerk BOOLEAN
)
BEGIN
    IF p_updated_by_accounting_clerk THEN
        UPDATE rehab_stays SET status = p_new_status WHERE stay_id = p_stay_id;
    ELSE
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Only accounting clerks can update the status';
    END IF;
END;
//
DELIMITER ;
