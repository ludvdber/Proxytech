# Proxytech

![PHP Version](https://img.shields.io/badge/php-8.4-777BB4?style=flat&logo=php&logoColor=white)
![Architecture](https://img.shields.io/badge/architecture-MVC-green)
![License](https://img.shields.io/badge/license-MIT-blue)
![Status](https://img.shields.io/badge/status-base_template-yellow)

## 💡 Purpose

This project was built as a learning exercise to understand:
- Custom MVC architecture without frameworks
- PHP routing from scratch
- Separation of concerns in web applications

It's intentionally minimal — a foundation to build upon.

## 📁 Project Structure

```
Proxytech/
├── app/
│   ├── config/        # Application configuration
│   ├── controller/    # Request handlers
│   └── view/          # HTML templates
├── public/            # Web root (CSS, JS, images)
```

## ⚙️ Requirements

- PHP 8.4+

## 🏗️ Architecture

This project follows the **Model-View-Controller (MVC)** pattern:

| Component | Location | Purpose |
|-----------|----------|---------|
| **Controllers** | `app/controller/` | Handle HTTP requests and business logic |
| **Views** | `app/view/` | HTML templates for rendering pages |
| **Config** | `app/config/` | Application settings and routes |
| **Public** | `public/` | Static assets (entry point: `index.php`) |

## 🤝 Contributing

Feel free to fork this project and use it as a base for your own PHP applications.

## 👥 Authors

- **Nathan Delnatte**
- **Ludovic Vanden Berghe** - [@ludvdber](https://github.com/ludvdber)

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
