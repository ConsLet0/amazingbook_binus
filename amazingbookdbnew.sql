-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 05.34
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazingbookdbnew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `gender_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_flag` int(11) DEFAULT NULL,
  `modified_at` date DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`id`, `created_at`, `updated_at`, `role_id`, `gender_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `image`, `delete_flag`, `modified_at`, `modified_by`) VALUES
(1, '2022-02-13 08:37:18', '2022-02-13 08:37:18', 1, 1, 'admin', 'satu', 'utama', 'adminutama@gmail.com', '$2y$10$GsIKHs6zn.rhY0kN6BRLUO/359GiZZBWgRYh7FD5bW5Mz9RLOypPy', '1644766638.R1_14.jpg', NULL, NULL, NULL),
(3, '2022-02-14 06:20:38', '2022-02-14 09:56:26', 2, 2, 'user', 'satu', 'utama', 'usersatu@gmail.com', '$2y$10$6Z39Ec7dCupjy8eFr16NT.KcwosmnYqv1D7zXLdBpqrWE3p1BoBvO', '1644844838.Panigale_7.jpg', NULL, NULL, NULL),
(6, '2022-02-14 14:17:23', '2022-02-14 14:44:36', 2, 2, 'user', 'tiga', 'primer', 'usertiga@gmail.com', '$2y$10$H9MHu6o7AslaWDF3lVVzxuG.j9tO52kIRW/W.3UDoGKc1Qhq1IRYS', '1644873443.clipart879804.png', NULL, NULL, NULL),
(8, '2022-06-02 10:03:22', '2022-06-02 10:03:22', 1, 1, 'affan', 'ilhamsyah', 'reza', 'affanilhamsyah69@gmail.com', '$2y$10$jbOKP7lwFWsVM78sjMXuxO9pIZ/t43v.ljCVMko.IcVvRVLv7FD.S', '1654189401.202327904_4705292116204198_9148661490339547699_n.jpg', NULL, NULL, NULL),
(9, '2022-06-04 10:31:14', '2022-06-04 10:31:14', 2, 1, 'Karina', 'Kirby Beasley', 'Garrison', 'userempat@gmail.com', '$2y$10$X9.gOAkJOuzfynLPSdcAS.ZVIVWCqHikodWRhVzQR6wAZbcxgqGsa', '1654363874.10854905_725183160911833_1870294209857236998_o.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebooks`
--

CREATE TABLE `ebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ebooks`
--

INSERT INTO `ebooks` (`id`, `created_at`, `updated_at`, `title`, `author`, `description`) VALUES
(1, NULL, '2022-02-14 09:24:15', '1990 - 2000 Novel', 'Henry Klien', 'This quotation for Faulkner’s 1936 novel comes from the Books of Samuel – more specifically, 19:4 in 2 Samuel, \r\n            which is in the Old Testament and relates some of the history of Israel. Absalom, the third son of David, rebelled against his father and was killed in battle. \r\n            The full Biblical sentence is But the king covered his face, and the king cried with a loud voice, O my son Absalom, O Absalom, my son, my son! Faulkner was a big fan of borrowed titles: his 1939 If I Forget Thee, \r\n            Jerusalem is also from the Bible, Psalms 137:5. The line in question is If I forget thee, Jerusalem, let my right hand forget its skill.'),
(2, NULL, NULL, 'Old Testament', 'John Grisham', 'This one is from 3:3 in the Ecclesiastes, again part of the Old Testament. The anonymous author is a King of Jerusalem who relates and analyses \n            events in his own life. This has resonated strongly with a lot of people: Abraham Lincoln quoted Ecclesiastes when addressing Congress in 1862, and the novelist \n            Thomas Wolfe called it ‘the greatest single piece of writing I have ever known.’ Grisham’s 1989 title is taken from the line that [To every thing there is a season, \n            and a time to every purpose under the heaven:] A time to kill, and a time to heal; a time to break down, and a time to build up…'),
(3, NULL, NULL, 'Brilliant sentence', 'Edith Wharton', 'Another Ecclesiastes quotation, this time from line 7:4. A brilliant sentence: The heart of the wise is in the house of mourning; but the heart of \n            fools is in the house of mirth. One of Wharton’s best-known novels, it came out in 1905.'),
(4, NULL, NULL, 'Land of Nod', 'John Steinbeck', 'Steinbeck apparently considered this 1952 novel to be his magnum opus, the one which all other novels before it had merely been practice for. \n            The title is suitably grand. Taken from Genesis, the first book of the Old Testament, it refers to line 4:16, after Cain has slain his brother Abel. And Cain \n            went out from the presence of the Lord, and dwelt in the land of Nod, on the east of Eden.'),
(5, NULL, NULL, 'Hemingway’s modernist', 'Ernest Hemingway', 'More Ecclesiastes! This particular quotation is from 1:5, which states that The sun also ariseth, and the sun goeth down, and hasteth to his \n            place where he arose. Hemingway’s modernist novel came out in 1926.'),
(6, NULL, NULL, 'Evelyn Waugh', 'Philippians', 'Waugh took the title for his 1930 novel from Philippians, full name Epistle to the Philippians, which is part of the New Testament and generally \n            attributed to Paul the Apostle. Most scholars consider it to be a collection of letter fragments sent from Paul to the church of Philippi, a city on the Greek island \n            of Thasos. The line in question is 3:21 and refers to Jesus Christ, [w]ho shall change our vile body, that it may be fashioned like unto his glorious body, according \n            to the working whereby he is able even to subdue all things unto himself.'),
(10, '2022-06-04 10:29:05', '2022-06-04 10:29:05', 'dfibhfn', 'sgsfgg', 'sgsagsg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender_desc` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genders`
--

INSERT INTO `genders` (`id`, `created_at`, `updated_at`, `gender_desc`) VALUES
(1, NULL, NULL, 'Male'),
(2, NULL, NULL, 'Female');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_08_165835_create_ebooks_table', 1),
(6, '2022_02_08_170014_create_roles_table', 1),
(7, '2022_02_08_170151_create_genders_table', 1),
(8, '2022_02_08_170250_create_accounts_table', 1),
(9, '2022_02_08_171108_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ebook_id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_desc` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `role_desc`) VALUES
(1, NULL, NULL, 'Admin'),
(2, NULL, NULL, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_role_id_foreign` (`role_id`),
  ADD KEY `accounts_gender_id_foreign` (`gender_id`);

--
-- Indeks untuk tabel `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ebook_id_foreign` (`ebook_id`),
  ADD KEY `orders_account_id_foreign` (`account_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `accounts_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `orders_ebook_id_foreign` FOREIGN KEY (`ebook_id`) REFERENCES `ebooks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
