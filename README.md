
# 🩸 RaktMitra - Online Emergency Blood Donor Platform 

![RaktMitra Banner](https://github.com/Ayaan-Sk/RaktMitra/blob/cb5291c63c748f693f1f8748e3905c9e76e2bcbe/RaktMitraHero.jpg)  

RaktMitra is an **online emergency blood donor platform** where users can **find blood donors** or **register themselves** as a donor to help those in need. The platform efficiently connects hospitals, donors, and patients in times of emergency.  

## 🚀 Features  

✅ **Find Donors:** Search for available blood donors based on blood group and location.  
✅ **Register as a Donor:** Sign up and list yourself as an available blood donor.  
✅ **Emergency Requests:** Post urgent blood requirements and notify nearby donors.  
✅ **Hospital Collaboration:** Hospitals can list blood requirements and manage donors.  
✅ **Secure Authentication:** User registration and login system for donors and hospitals.  
✅ **Real-Time Updates:** Dashboard showing available donors and active requests.  
✅ **📲 Live Chat Bot (WhatsApp Integration):**  
   - Users can chat with an **automated WhatsApp bot** for quick donor searches.  
   - Directly request blood donations via WhatsApp.  
   - Real-time donor response through messaging.  

## 🏗️ Tech Stack  

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP, MySQL  
- **Database:** MySQL  
- **Authentication:** PHP Sessions, bcrypt hashing  
- **Live Chat Bot:** WhatsApp API integration using Twilio or Meta's WhatsApp Cloud API  
- **Hosting:** Apache Server  

## 📂 Project Structure  

```
RaktMitra/
│── dashboard/          # Dashboard UI and functionalities  
│── css/                # Stylesheets  
│── js/                 # JavaScript files  
│── images/             # Images and icons  
│── database/           # SQL scripts for tables  
│── includes/           # Configurations and helper files  
│── chatbot/            # WhatsApp chatbot API integration  
│── index.php           # Homepage  
│── login.php           # User login  
│── register.php        # User registration  
│── donate.php          # Donor registration page  
│── requests.php        # Emergency blood requests  
│── hospitals.php       # List of hospitals  
│── contact.php         # Contact us page  
│── README.md           # Documentation  
```

## 🛠️ Installation Guide  

1. **Clone the repository:**  
   ```bash
   git clone https://github.com/yourusername/RaktMitra.git
   ```
2. **Set up the database:**  
   - Import the `database/raktmitra.sql` file into MySQL.  
   - Configure database credentials in `includes/db_config.php`.  

3. **Configure WhatsApp Chatbot:**  
   - Set up a WhatsApp Business API account via **Twilio** or **Meta Cloud API**.  
   - Configure webhook URLs in `chatbot/whatsapp_api.php`.  
   - Use the provided API key to connect WhatsApp with donor search.  

4. **Start a local server:**  
   - Use **XAMPP** or **MAMP** and place the project folder inside `htdocs`.  
   - Start Apache and MySQL.  

5. **Run the project:**  
   - Open a browser and visit `http://localhost/RaktMitra/`.

6. **Preview the project:**  
   - Open a browser and search `https://raktmitra.netlify.app/`. 

## 📜 Database Schema  

### **Donors Table (`donors`)**  

| Column Name   | Type          | Description              |  
|--------------|--------------|--------------------------|  
| `id`         | INT (Primary) | Auto Increment ID        |  
| `name`       | VARCHAR(255)  | Donor’s Name             |  
| `contact`    | VARCHAR(20)   | Contact Number           |  
| `bloodgroup` | VARCHAR(5)    | Blood Type (A+, B-, etc.) |  
| `location`   | VARCHAR(255)  | City/Area                |  
| `status`     | ENUM(‘Available’, ‘Donated Recently’) | Donor Status |  

### **Requests Table (`requests`)**  

| Column Name   | Type          | Description               |  
|--------------|--------------|---------------------------|  
| `id`         | INT (Primary) | Auto Increment ID         |  
| `hospital`   | VARCHAR(255)  | Hospital Name             |  
| `location`   | VARCHAR(255)  | Hospital Address          |  
| `bloodgroup` | VARCHAR(5)    | Required Blood Type       |  
| `status`     | ENUM(‘Open’, ‘Fulfilled’) | Request Status |  

## 📲 How WhatsApp Chatbot Works  

1. **Find a donor quickly** by sending a WhatsApp message:  
   ```
   "Need A+ blood in Mumbai"
   ```
   The chatbot will reply with **available donors** and their contact details.  

2. **Register as a donor** by sending:  
   ```
   "Register as donor: John Doe, A+, Delhi, +91XXXXXXXXXX"
   ```
   The chatbot automatically adds the user to the donor database.  

3. **Get emergency blood request alerts** through WhatsApp notifications.  

## 🎯 Future Enhancements  

🔹 **Mobile App Integration** – Develop an Android/iOS app for easier access.  
🔹 **Live Location Tracking** – Show nearest donors on a map in real time.  
🔹 **Automated Blood Matching System** – AI-powered matching of donors and recipients.  
🔹 **Multi-Language Support** – Add regional language support for better accessibility.  

## 🤝 Contributing  

We welcome contributions! To contribute:  
1. **Fork the repository**  
2. **Create a new branch**  
3. **Make your changes**  
4. **Submit a Pull Request**  

 

## 📞 Contact  

For any queries or collaborations:  

📧 Email: musicwithayaan@gmail.com

---
