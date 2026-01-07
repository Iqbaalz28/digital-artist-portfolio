# 🎨 Digital Artist Portfolio

A modern, responsive portfolio website for digital artists built with CodeIgniter 3.x. Features a stunning dark theme with glassmorphism effects, 3D animations, and a complete admin panel for content management.

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=flat-square&logo=codeigniter&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=flat-square&logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

## ✨ Features

### Frontend
- 🌙 **Modern Dark Theme** - Sleek dark color scheme with cyan/purple gradient accents
- 🪟 **Glassmorphism UI** - Beautiful frosted glass effects with blur
- 🎬 **3D Animations** - Three.js powered background animations
- 📱 **Fully Responsive** - Optimized for all device sizes
- 🖼️ **Gallery Lightbox** - Fresco.js powered image gallery
- ⚡ **Smooth Transitions** - Polished micro-interactions

### Backend (Admin Panel)
- 🔐 **Secure Authentication** - Login system with session management
- 📊 **Dashboard** - Content management interface
- 👤 **Profile Management** - Update artist bio and photos
- 🖼️ **Gallery Management** - Upload and manage illustrations
- 📝 **Blog System** - Create and edit blog posts
- 👥 **Client Management** - Manage client list
- 🏆 **Honors & Awards** - Showcase achievements
- 🎤 **Interview Management** - List media appearances

## 🛠️ Tech Stack

| Component | Technology |
|-----------|------------|
| Backend Framework | CodeIgniter 3.x |
| Frontend | HTML5, CSS3, JavaScript |
| CSS Framework | Bootstrap 5.3 |
| Admin Theme | AdminLTE (customized dark theme) |
| Database | MySQL |
| 3D Graphics | Three.js |
| Icons | Font Awesome 6 |
| Lightbox | Fresco.js |
| Data Tables | DataTables.js |

## 📁 Project Structure

```
digitalartist/
├── application/
│   ├── config/          # Configuration files
│   ├── controllers/     # Application controllers
│   ├── models/          # Database models
│   └── views/
│       ├── layouts/     # Frontend layout templates
│       ├── pages/       # Frontend page views
│       └── manage/      # Admin panel views
├── assets/
│   ├── css/
│   │   ├── modern.css   # Frontend modern theme
│   │   └── fresco.css   # Lightbox styles
│   └── js/
│       ├── modern.js    # Frontend interactions
│       └── fresco.min.js
├── media/
│   └── css/
│       ├── admin-modern.css  # Admin dark theme
│       └── AdminLTE.min.css
├── uploads/             # User uploaded files
├── database/            # Database schema
└── index.php            # Application entry point
```

## 🚀 Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache with mod_rewrite enabled
- XAMPP/WAMP/LAMP or similar stack

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/digital-artist-portfolio.git
   ```

2. **Move to web server directory**
   ```bash
   # For XAMPP
   mv digital-artist-portfolio /xampp/htdocs/digitalartist
   ```

3. **Create database**
   ```sql
   CREATE DATABASE digitalartist;
   ```

4. **Import database schema**
   ```bash
   mysql -u root -p digitalartist < database/digitalartist.sql
   ```

5. **Configure database connection**
   
   Edit `application/config/database.php`:
   ```php
   $db['default'] = array(
       'hostname' => 'localhost',
       'username' => 'root',
       'password' => '',
       'database' => 'digitalartist',
       // ...
   );
   ```

6. **Configure base URL**
   
   Edit `application/config/config.php`:
   ```php
   $config['base_url'] = 'http://localhost/digitalartist/';
   ```

7. **Start the server**
   ```bash
   # Start Apache and MySQL via XAMPP Control Panel
   ```

8. **Access the website**
   - Frontend: `http://localhost/digitalartist/`
   - Admin Panel: `http://localhost/digitalartist/manage`

## 📸 Screenshots

### Frontend
- **Illustration Gallery** - Grid layout with hover effects
- **About Page** - Profile with rotating border animation
- **Blog Page** - Card-based blog layout
- **Contact Page** - Glassmorphism contact info

### Admin Panel
- **Dashboard** - Dark theme with gradient accents
- **Data Tables** - Styled tables with search & pagination
- **Forms** - Modern input styling with glow effects

## 🎨 Customization

### Theme Colors

Edit CSS variables in `assets/css/modern.css` or `media/css/admin-modern.css`:

```css
:root {
    --bg-primary: #0a0a0f;       /* Main background */
    --bg-secondary: #12121a;      /* Secondary background */
    --accent-cyan: #00d4ff;       /* Primary accent */
    --accent-purple: #7c3aed;     /* Secondary accent */
    --accent-pink: #f472b6;       /* Tertiary accent */
    --text-primary: #ffffff;      /* Main text */
    --text-secondary: #a0a0b0;    /* Secondary text */
}
```

### Adding New Pages

1. Create controller in `application/controllers/`
2. Create view in `application/views/pages/`
3. Add route in `application/config/routes.php`
4. Add navigation link in `application/views/layouts/main.php`

## 🔧 Development

### File Locations

| Purpose | Location |
|---------|----------|
| Frontend CSS | `assets/css/modern.css` |
| Admin CSS | `media/css/admin-modern.css` |
| Frontend JS | `assets/js/modern.js` |
| Frontend Layout | `application/views/layouts/main.php` |
| Admin Layout | `application/views/manage/layout.php` |
| Admin Sidebar | `application/views/manage/sidebar.php` |

### Making Changes

1. Edit CSS files for styling changes
2. Clear browser cache (Ctrl+F5) to see updates
3. Check browser console for JavaScript errors

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](license.txt) file for details.

## 👤 Author

**Iqbal Rizky Maulana**

- Website: [palletecartoon.com](https://palletecartoon.com)
- Instagram: [@pallete.cartoon](https://instagram.com/pallete.cartoon)
- LinkedIn: [Iqbal Rizky Maulana](https://linkedin.com/in/iqbalrizkymaulana)

---

<p align="center">
  Made with ❤️ by Digital Artist
</p>
