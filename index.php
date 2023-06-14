<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title> Parfait DAHOUI </title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Parfait DAHOUI</a>
            <div class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class="bx bx-home-alt"></i>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="bx bx-user"></i>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="bx bx-book"></i>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="bx bxs-package"></i>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#work" class="nav_link">
                            <i class="bx bx-briefcase-alt-2"></i>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="bx bx-message-square-detail"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <i class="bx bx-moon change-theme" id="theme-button"></i>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">

            <div class="home_container container grid">

                <div class="home_data">
                    <span class="home_greeting">Hey, Je suis </span>
                    <h1 class="home_name">Parfait DAHOUI</h1>
                    <h3 class="home_education">Développeur Web & Mobile.</h3>
                    <!-- <div class="homme_buttons">
                       <a href="#" class="button button--ghost">Download CV</a>
                        <a href="#about" class="button">A Propos de moi</a>
                    </div>-->
                </div>
                <div class="home_handle">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/1.png" alt="profil" class="home_img">
                            </div>
                            <div class="swiper-slide"><img src="assets/img/7.png" alt="profil" class="home_img"></div>
                            <div class="swiper-slide"><img src="assets/img/8.png" alt="profil" class="home_img"></div>
                            <div class="swiper-slide"><img src="assets/img/4.png" alt="profil" class="home_img"></div>
                            <div class="swiper-slide"><img src="assets/img/5.png" alt="profil" class="home_img"></div>
                            <div class="swiper-slide"><img src="assets/img/3.jpg" alt="profil" class="home_img"></div>

                        </div>
                        <!--<div class="swiper-button-next"></div>-->
                        <!-- <div class="swiper-button-prev"></div>-->
                        <div class="swiper-pagination"></div>
                        <div class="autoplay-progress">
                            <svg viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="20"></circle>
                            </svg>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="home_social">
                    <a href="tel:+22968714271" target="_blank" class="home_social-link">
                        <i class='bx bx-phone'></i>
                    </a>
                    <a href="mailto:parfait.dahoui@gmail.com" class="home_social-link">
                        <i class='bx bx-envelope'></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=0022968714271&text=Hello, more information!" target="_blank" class="home_social-link">
                        <i class='bx bxl-whatsapp'></i>
                    </a>


                    <a href="https://www.linkedin.com/in/parfait-dahoui-03754516a" target="_blank" class="home_social-link">
                        <i class="bx bxl-linkedin-square"></i>
                    </a>
                </div>
                <a href="#contact" class="home_scroll">
                    <i class="bx bx-mouse home_scroll-icon"></i>
                    <span class="home_scroll-name">Scroll Down</span>
                </a>
            </div>
        </section>



        <!--=============== ABOUT ===============-->
        <section class="about section" id="about">
            <span class="section__subtitle">Ma présentation</span>
            <h2 class="section__title">A Propos de moi</h2>
            <div class="about_container container grid">
                <img src="assets/img/moi.jpeg" alt="about image" class="about_img">
                <div class="about_data">
                    <div class="about_info">
                        <div class="about_box">
                            <i class="bx bx-award about_icon"></i>
                            <h3 class="about_title">Expérience</h3>
                            <span class="about_subtitle">04 ans d'expérience professionnelle</span>
                        </div>

                        <div class="about_box">
                            <i class="bx bx-briefcase-alt about_icon"></i>
                            <h3 class="about_title">Complété</h3>
                            <span class="about_subtitle">18+ Projets</span>
                        </div>

                        <div class="about_box">
                            <i class="bx bx-support about_icon"></i>
                            <h3 class="about_title">Support</h3>
                            <span class="about_subtitle">Online 24/7</span>
                        </div>
                    </div>
                    <p class="about_description">
                        En tant que développeur web et mobile expérimenté, j'ai acquis une grande expérience dans la création d'applications performantes pour les dispositifs mobiles et les sites web, et j'ai la satisfaction de mes clients comme priorité absolue.
                    </p>
                    <a style="float:right;" href="#contact" class="button">Nous contacter</a>
                </div>
            </div>
        </section>

        <!--=============== SKILLS ===============-->
        <section class="skills section" id="skills">
            <span class="section__subtitle">Mes compétences</span>
            <h2 class="section__title">Mes expériences</h2>
            <div class="skills_container container grid">
                <div class="skills_content">
                    <h3 class="skills_title">Frontend developer</h3>
                    <div class="skills_box">
                        <div class="skills_group">
                            <div class="skills_data">
                                <i class='bx bxl-flutter skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">Flutter</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-html5 skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-css3 skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills_group">
                            <div class="skills_data">
                                <i class='bx bxl-javascript skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">JavaScript</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-bootstrap skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">Bootstrap</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-tailwind-css skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">Tailwind-css</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

                <div class="skills_content">
                    <h3 class="skills_title">Backend Developer</h3>
                    <div class="skills_box">
                        <div class="skills_group">
                            <div class="skills_data">
                                <i class='bx bxl-php skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-react skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">React</h3>
                                    <span class="skills_level">Basic</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-python skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">Python</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills_group">
                            <div class="skills_data">
                                <i class='bx bxl-wordpress skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">Wordpress</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxl-firebase skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">Firebase</h3>
                                    <span class="skills_level">Advanced</span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <i class='bx bxs-badge-check skills_icon'></i>
                                <div>
                                    <h3 class="skills_name">API</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!--=============== SERVICES ===============-->
        <section class="services section" id="services">
            <span class="section__subtitle">Nos Services</span>
            <h2 class="section__title">Nos offres</h2>

            <div class="services_container container grid">
                <div class="services_card">
                    <h3 class="services_title">
                        Site <br> Vitrine
                    </h3>
                    <span class="services_button">
                        See more <i class='bx bxs-right-arrow-alt services_icon'></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class='bx bx-x services_modal-close'></i>

                            <h3 class="services_modal-title">Site Vitrine</h3>
                            <p class="services_modal-description">
                                Un site vitrine est un site web statique qui présente les informations de base sur une entreprise, ses produits ou services, et qui permet aux visiteurs de découvrir rapidement son offre et sa crédibilité en ligne. Un site vitrine peut jouer plusieurs rôles, notamment :
                            </p>
                            <ul class="services_modal-list">
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Présenter l'entreprise et son offre
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Donner une image professionnelle et crédible de l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Informer les visiteurs sur les produits ou services proposés
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Faciliter la prise de contact avec l'entreprise (e-mail, téléphone, formulaire de contact...)
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Fournir des informations pratiques telles que les horaires, les adresses et les itinéraires
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Afficher des témoignages de clients satisfaits </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Proposer du contenu de qualité pour améliorer le référencement naturel (SEO) </p>
                                </li>
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Donner une idée de l'identité visuelle et de la personnalité de l'entreprise. </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services_card">
                    <h3 class="services_title">
                        Site<br>E&#8209;Commerce

                    </h3>
                    <span class="services_button">
                        See more <i class='bx bxs-right-arrow-alt services_icon'></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class='bx bx-x services_modal-close'></i>

                            <h3 class="services_modal-title">Site E&#8209;Commerce</h3>
                            <p class="services_modal-description">
                                Un site e-commerce est une plateforme en ligne qui permet à une entreprise de vendre directement ses produits ou services à ses clients sur internet, et qui inclut des fonctionnalités telles qu'un catalogue de produits, un panier d'achat, un processus de paiement sécurisé et un suivi des commandes.
                            </p>
                            <ul class="services_modal-list">
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Vendre des produits ou services directement aux clients sur internet
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Fournir un catalogue de produits clair et facile à naviguer
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Offrir des options de recherche et de filtrage pour faciliter la recherche de produits
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Permettre aux clients de passer des commandes et d'ajouter des articles à leur panier
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Proposer des moyens de paiement sécurisés pour les transactions en ligne
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Gérer les stocks et suivre les commandes pour garantir une livraison rapide et efficace
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Fournir un service clientèle pour répondre aux questions et résoudre les problèmes des clients
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Utiliser des techniques de marketing en ligne pour attirer et fidéliser les clients.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services_card">
                    <h3 class="services_title">
                        Blog
                    </h3>
                    <span class="services_button">
                        See more <i class='bx bxs-right-arrow-alt services_icon'></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class='bx bx-x services_modal-close'></i>

                            <h3 class="services_modal-title">Blog</h3>
                            <p class="services_modal-description">
                                Un blog est un site web qui présente des articles écrits par un individu ou un groupe de personnes sur un sujet spécifique ou une variété de sujets.
                            </p>
                            <ul class="services_modal-list">
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Partager des informations sur un sujet spécifique ou une variété de sujets
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Partager des opinions et des expériences personnelles
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Donner des conseils et partager des réflexions sur des événements d'actualité
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Fournir des critiques de produits ou de services
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Attirer un public fidèle et renforcer sa notoriété
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Encourager l'engagement des lecteurs </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Susciter des interactions avec les lecteurs.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services_card">
                    <h3 class="services_title">
                        Outils de <br> communication<br> professionnelle
                    </h3>
                    <span class="services_button">
                        See more <i class='bx bxs-right-arrow-alt services_icon'></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class='bx bx-x services_modal-close'></i>

                            <h3 class="services_modal-title">Outils de communication professionnelle</h3>
                            <p class="services_modal-description">
                                Un outil de communication est un moyen technologique utilisé pour permettre la transmission d'informations et la collaboration entre les membres d'une équipe ou d'une organisation.
                            </p>
                            <ul class="services_modal-list">
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Favoriser la communication entre les employés d'une entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Permettre la collaboration sur des projets et des tâches communes
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Faciliter le partage d'informations importantes entre les membres de l'équipe
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Accélérer la prise de décision et l'exécution des tâches
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Améliorer la productivité et l'efficacité de l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Renforcer la culture d'entreprise et le sentiment d'appartenance à une équipe
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Réduire les coûts de communication en éliminant le besoin de déplacements physiques ou de réunions en personne
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Permettre une communication plus flexible et plus rapide, en temps réel ou en différé.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services_card">
                    <h3 class="services_title">
                        Un système <br> de gestion
                    </h3>
                    <span class="services_button">
                        See more <i class='bx bxs-right-arrow-alt services_icon'></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class='bx bx-x services_modal-close'></i>

                            <h3 class="services_modal-title">Un système de gestion</h3>
                            <p class="services_modal-description">
                                Un système de gestion est un ensemble de processus et de méthodes utilisés pour gérer efficacement les ressources et les activités d'une entreprise ou d'une organisation <br> <b> Hotel, Ecole, Supermarché, Pharmacie, entreprise ...</b>.
                            </p>
                            <ul class="services_modal-list">
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Amélioration de la qualité des produits ou des services offerts par l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Réduction des coûts et de la durée des processus
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Optimisation de l'utilisation des ressources de l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Amélioration de la productivité et de l'efficacité de l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Améliorer la productivité et l'efficacité de l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Renforcement de la culture d'entreprise et du sentiment d'appartenance à une équipe
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Réduction des risques et des pertes financières pour l'entreprise
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Conformité aux exigences légales, réglementaires et de certification applicables.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services_card">
                    <h3 class="services_title">
                        Application <br> Mobile
                    </h3>
                    <span class="services_button">
                        See more <i class='bx bxs-right-arrow-alt services_icon'></i>
                    </span>
                    <div class="services_modal">
                        <div class="services_modal-content">
                            <i class='bx bx-x services_modal-close'></i>

                            <h3 class="services_modal-title">Application Mobile</h3>
                            <p class="services_modal-description">
                            </p>
                            <ul class="services_modal-list">
                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de vente en ligne pour les entreprises de commerce électronique
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de réservation pour les entreprises de services, telles que les hôtels, les restaurants, les salons de coiffure, etc.
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de gestion de projet pour les entreprises de toutes tailles
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de gestion de tâches pour les travailleurs indépendants et les équipes
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de communication pour les entreprises, telles que les applications de chat, de visioconférence et de messagerie instantanée
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de suivi de la productivité et de l'efficacité pour les travailleurs indépendants et les équipes
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de gestion de la relation client (CRM) pour les entreprises de toutes tailles
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de suivi de la santé et du bien-être pour les particuliers et les entreprises
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de formation pour les entreprises et les institutions éducatives
                                    </p>
                                </li>

                                <li class="services_modal-item">
                                    <i class='bx bx-check services_modal-icon'></i>
                                    <p class="services_modal-info">
                                        Applications de divertissement pour les particuliers, telles que les jeux, les applications de streaming vidéo, etc.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== WORK ===============-->
        <section class="work section" id="work">
            <span class="section__subtitle">Mes Projets</span>
            <h2 class="section__title">Projets</h2>
            <div class="work_filters">
                <span class="work_item active-work" data-filter='all'>Tous</span>
                <span class="work_item" data-filter='.web'>Web</span>
                <span class="work_item" data-filter='.mobile'>Mobile</span>
                <!--<span class="work_item" data-filter='.design'>Design</span>-->
            </div>
            <div class="work_container container grid">
                <div class="work_card mix web">
                    <img src="assets/img/sognon.svg" alt="" class="work_img">
                    <h3 class="work_title">SOGONONCONSULTING</h3>
                    <a href="https://sognonconsulting.com/" target="_blank" class="work_button">
                        Demo <i class='bx bxs-right-arrow-alt work_icon'></i>
                    </a>

                </div>

                <div class="work_card mix web">
                    <img src="assets/img/MPS-logo.svg" alt="" class="work_img">
                    <h3 class="work_title">Le MPS</h3>
                    <a href="https://mps.bj/" target="_blank" class="work_button">
                        Demo <i class='bx bxs-right-arrow-alt work_icon'></i>
                    </a>

                </div>

                <!--<div class="work_card mix mobile">
                    <img src="assets/img/work3.jpg" alt="" class="work_img">
                    <h3 class="work_title">GenFact</h3>
                    <a href="#" class="work_button">
                        Demo <i class='bx bxs-right-arrow-alt work_icon'></i>
                    </a>

                </div>-->

                <div class="work_card mix mobile">
                    <img src="assets/img/agribenapp.png" alt="" class="work_img">
                    <h3 class="work_title">AgriBenApp</h3>
                    <a href="https://mega.nz/file/nDICCBaJ#0ZR1U85GrKJm0mAqqHjFlN7OAellFPUawCSYamDTtP8" target="_blank" class="work_button">
                        Demo <i class='bx bxs-right-arrow-alt work_icon'></i>
                    </a>

                </div>

                <!--<div class="work_card mix design">
                    <img src="assets/img/work5.jpg" alt="" class="work_img">
                    <h3 class="work_title">Web</h3>
                    <a href="#" class="work_button">
                        Demo <i class='bx bxs-right-arrow-alt work_icon'></i>
                    </a>

                </div>-->
            </div>
        </section>

        <!--=============== TESTIMONIALS ===============-->
        <section class="testimonial section">
            <span class="section__subtitle">Témoignage de mes clients</span>
            <h2 class="section__title">Témoignage</h2>

            <div class="testimonial_container container swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial_card swiper-slide">
                        <img src="assets/img/testimonial1.png" alt="" class="testimonial_img">
                        <h3 class="testimonial_name">
                            Pacôme DAVO
                        </h3>
                        <p class="testimonial_description">
                            A really good job, all aspects of the project were
                            followed step by step and with good results.
                        </p>
                    </div>

                    <div class="testimonial_card swiper-slide">
                        <img src="assets/img/testimonial2.png" alt="" class="testimonial_img">
                        <h3 class="testimonial_name">
                            Nice Bernice
                        </h3>
                        <p class="testimonial_description">
                            A really good job, all aspects of the project were
                            followed step by step and with good results.
                        </p>
                    </div>

                    <div class="testimonial_card swiper-slide">
                        <img src="assets/img/testimonial3.png" alt="" class="testimonial_img">
                        <h3 class="testimonial_name">
                            Géovith AGONGLO
                        </h3>
                        <p class="testimonial_description">
                            A really good job, all aspects of the project were
                            followed step by step and with good results.
                        </p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <span class="section__subtitle">Nous-contactez</span>
            <h2 class="section__title">Contact</h2>
            <div class="contact_container container grid">
                <div class="contact_content">
                    <h3 class="contact_title">Me contacter</h3>
                    <div class="contact_info">
                        <div class="contact_card">
                            <i class='bx bx-mail-send contact_card-icon'></i>
                            <h3 class="contact_card-title">E-mail</h3>
                            <span class="contact_card-data">parfait.dahoui@gmail.com</span>

                            <a href="mailto:parfait.dahoui@gmail.com" target="_blank" class="contact_button">
                                Ecrit moi <i class='bx bx-right-arrow-alt contact_button-icon'></i>
                            </a>
                        </div>
                        <br>
                    </div>

                    <div class="contact_info">
                        <div class="contact_card">
                            <i class='bx bxl-whatsapp contact_card-icon'></i>
                            <h3 class="contact_card-title">Whatsapp</h3>
                            <span class="contact_card-data">+229 68 71 42 71</span>

                            <a href="https://api.whatsapp.com/send?phone=0022990516091&text=Hello, more information!" target="_blank" class="contact_button">
                                Ecrit moi <i class='bx bx-right-arrow-alt contact_button-icon'></i>
                            </a>
                        </div>
                        <br>
                    </div>

                    <div class="contact_info">
                        <div class="contact_card">
                            <i class='bx bxl-facebook contact_card-icon'></i>
                            <h3 class="contact_card-title">Facebook</h3>
                            <span class="contact_card-data">Parfait DAHOUI</span>

                            <a href="https://www.facebook.com/parfait.ahloumessou" target="_blank" class="contact_button">
                                Ecrit moi <i class='bx bx-right-arrow-alt contact_button-icon'></i>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="contact_content">
                    <h3 class="contact_title">Votre projet</h3>
                    <form action="" class="contact_form">
                        <div class="contact_form-div">
                            <label for="" class="contact_form-tag">Nom & Prénoms</label>
                            <input type="text" placeholder="insert your name" class="contact_form-input">
                        </div>

                        <div class="contact_form-div">
                            <label for="" class="contact_form-tag">E-mail</label>
                            <input type="email" placeholder="Insert your email" class="contact_form-input">
                        </div>

                        <div class="contact_form-div contact_form-area">
                            <label for="" class="contact_form-tag">Projet</label>
                            <input type="text" class="contact_form-input">
                            <textarea name="" id="" placeholder="Write your project" cols="30" rows="10" class="contact_form-input"></textarea>
                        </div>

                        <button style="float: right;" class="button">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer"><br>
        <div class="footer_container container">
            <h1 class="footer_title">Parfait DAHOUI</h1>

            <ul class="footer_list">
                <li><a href="#about" class="footer_link">A Propos</a></li>
                <li><a href="#work" class="footer_link">Projets</a></li>
                <li><a href="#services" class="footer_link">Nos services</a></li>
            </ul>
            <ul class="footer_social">
                <a href="https://www.facebook.com/parfait.ahloumessou" target="_blank" class="footer_social-link"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/parfait.ahloumessou" target="_blank" class="footer_social-link"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.linkedin.com/in/parfait-dahoui-03754516a" target="_blank" class="footer_social-link"><i class='bx bxl-linkedin'></i></a>
            </ul>
            <span class="footer_copy">
                &#169; Parfait DAHOUI. All rigths reserved
            </span>
        </div>
        <br>
        <br>
        <br>
        <br>
    </footer>


    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>