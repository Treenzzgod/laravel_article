-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 12:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'jantung', 'jantung', NULL, NULL),
(2, 'mata', 'mata', NULL, NULL),
(3, 'Paru-Paru', 'paru-paru', NULL, NULL),
(4, 'tangan', 'tangan', '2021-11-19 00:00:30', '2021-11-19 00:00:30'),
(5, 'nama', 'nama', '2021-11-19 00:00:36', '2021-11-19 00:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_12_132921_categories_create_table', 1),
(6, '2021_11_12_133404_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `image`, `category_id`, `excerpt`, `body`, `views`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Aliquam asperiores ipsa.', 'saepe-quae-et-atque-iusto-tenetur-ea-earum-vero', NULL, 1, 'Perspiciatis nobis aliquid omnis ipsam. Rerum est et neque quia et amet debitis. Laboriosam et rem hic saepe.', '<p>Aut cupiditate modi expedita molestiae magnam aut. Blanditiis quia numquam corrupti non veritatis atque.</p><p>Rem quia qui ipsum velit illo aperiam. Molestiae nihil ducimus vel et sunt. Aperiam a labore maiores minima.</p><p>Itaque ducimus voluptatem minima occaecati officiis ullam. Eum aspernatur et facilis id blanditiis. Tenetur distinctio eius eligendi rerum.</p><p>Accusantium ut dolor consequatur aut. Quis est ut qui eligendi quis aut. Qui est iste beatae ea delectus adipisci voluptatem.</p><p>Ad fuga tempore error dolor fugit occaecati. Est aut consequatur est vel. Ea et natus autem dolorum. Porro omnis est sint.</p><p>Et sint quia ullam illo cupiditate quia. Eius sed cum ut porro ut exercitationem distinctio.</p><p>Et fuga ducimus totam ullam. Eaque eum voluptas laudantium quia. Perferendis rerum ut suscipit assumenda fugit unde numquam. Aut sint atque illum veritatis cumque et voluptatem.</p>', 24, '2021-11-18 03:20:42', NULL, '2021-11-18 09:21:22'),
(2, 'Autem beatae veniam.', 'minus-at-maiores-consequatur-itaque-repellat', NULL, 1, 'Eius est dignissimos est inventore. Porro optio et necessitatibus consectetur est illo. Deserunt eligendi accusamus odit qui accusantium amet deleniti.', '<p>Saepe illo id recusandae eum ex. Id excepturi sit nam fugit numquam nihil non. Maiores qui eaque doloribus magnam ab voluptatem. Eum saepe praesentium laboriosam vero voluptatum.</p><p>Beatae expedita exercitationem debitis et incidunt at. Quasi dolorem laborum nam dolores perspiciatis. Voluptatem maiores optio et laborum optio exercitationem.</p><p>Asperiores vero odio aperiam quis aut reiciendis cupiditate soluta. Quaerat occaecati ut qui voluptatem cumque. Reiciendis eos in voluptates ut qui.</p><p>Eaque neque omnis placeat eligendi est illo. Totam ut sit officia quia. Iusto nostrum ut voluptatem adipisci. Doloremque repellendus quam optio hic.</p><p>Voluptatem doloribus ab et quae impedit. Reiciendis eius facilis laborum in. Aut non aut consequatur quidem occaecati dolores.</p><p>Odio rerum totam aut esse itaque voluptates. Sequi expedita debitis sint minima.</p><p>Aliquam qui incidunt nobis facere ipsa voluptate. Veritatis dolor perspiciatis similique. Voluptatem inventore voluptatem in nobis beatae eius ut. Autem repellendus voluptatibus nihil esse corporis molestiae repellat.</p><p>Provident recusandae quis fugiat nobis quia repellat necessitatibus. Excepturi culpa voluptatem beatae libero blanditiis veritatis. Nisi vero deleniti ipsa rerum ab dolores et. Voluptates ducimus minus aut voluptate magnam recusandae sed.</p>', 3, '2021-11-18 03:20:42', NULL, '2021-11-18 09:21:55'),
(4, 'Eligendi officiis optio.', 'et-molestiae-voluptatem-facilis', NULL, 2, 'Doloremque nesciunt dolores quae facere praesentium qui. Nulla ea maiores et consequuntur. Nisi unde cupiditate qui.', '<p>Eos ut et et ea voluptatem suscipit inventore deserunt. Odio deleniti qui atque cumque reiciendis fugit laudantium. Aliquam sunt exercitationem et officiis. In officia maxime pariatur reiciendis.</p><p>Maiores hic quia nisi inventore. Est nisi quidem ea hic et hic quia sed. Ipsum in reiciendis hic pariatur aut a voluptas. Reprehenderit non laudantium amet laboriosam fugiat.</p><p>Sed blanditiis commodi voluptas aperiam aut perferendis. Nisi velit dignissimos assumenda aut. Vel vel aperiam animi atque ullam deserunt dolorem. Ut dolorem pariatur dolor quasi illo.</p><p>Deleniti nisi illum rem maiores deserunt eos. Nostrum tempora aliquam quod voluptas.</p><p>Molestias quaerat ut vitae nostrum. Sunt et deleniti temporibus et sunt. Exercitationem blanditiis sint omnis tempore ut. Illo autem qui omnis ratione quis consequuntur. Numquam quibusdam est ipsam quae culpa ipsam iste ea.</p><p>Rerum voluptas tenetur harum facere et repellendus sed aut. Libero et sit ea. Perspiciatis maxime tenetur omnis ab alias perferendis. Qui dolores dolore minima voluptatem ad aut porro.</p>', 0, '2021-11-18 03:20:42', NULL, NULL),
(6, 'Qui sed sunt et eius ut dolores et maiores excepturi ab.', 'itaque-expedita-molestiae-repellendus-quo-dolorem-natus-molestiae', NULL, 2, 'Vero ea aut repellendus inventore officia illo laboriosam. Quis laboriosam atque sed eligendi harum. Mollitia eos nihil consectetur molestiae est deleniti sunt. Quo libero commodi qui autem.', '<p>Ut ex sapiente officia porro consequuntur nobis voluptas. Aut nemo perferendis repudiandae rem. Cumque dolorum dolores non.</p><p>Quia modi quia numquam rerum dolorem reprehenderit fuga. Et nisi nemo debitis cupiditate dolores. Omnis blanditiis reiciendis nulla sit unde et voluptate.</p><p>Et praesentium veniam velit asperiores ducimus nesciunt provident. Eligendi provident qui maiores eos ut aut totam. Cupiditate et quo libero modi impedit ratione mollitia aut. Minima laudantium minus quae exercitationem fugiat fuga.</p><p>Illum quo ipsa facere atque unde. Consequuntur et sed et ipsam qui velit provident. Delectus exercitationem aut deserunt illo provident pariatur excepturi. Mollitia ullam vel labore amet ducimus.</p><p>Consequatur eligendi architecto dicta dignissimos. Est deleniti enim sed corporis provident. Magnam rerum et sit blanditiis.</p><p>Deleniti ab repudiandae animi voluptas eligendi quia incidunt. Eum labore officiis consequatur quod. Quibusdam cum debitis est ex at saepe.</p><p>Qui delectus similique rerum eius. Corporis maiores impedit ex praesentium sed fugit repellat sed. Dolor earum architecto exercitationem voluptates.</p><p>Dolor maxime velit enim repellendus beatae quas. Et modi aut natus. Magnam id et esse provident iste culpa.</p><p>Totam nemo ex dolore praesentium et suscipit. Rerum quisquam molestiae a nemo. Ipsa qui fugiat pariatur quia tenetur voluptatem aperiam. Consequuntur modi quas accusamus fuga et id.</p>', 0, '2021-11-18 03:20:42', NULL, NULL),
(7, 'Qui et sunt et.', 'est-nam-quas-soluta-dolores-numquam-hic', NULL, 1, 'Voluptatem voluptatem blanditiis dolorem id. Non repellendus fugiat tempore non. Dolor vel explicabo nemo dolorum quisquam corporis. Natus quis corporis omnis sed aut. Est dignissimos quia velit laboriosam commodi.', '<p>Quo nisi velit temporibus velit. Quis neque nulla non facilis est unde saepe. Aut earum repellat quae et.</p><p>Quam cum voluptatem sit possimus. Provident quo quis quasi non est hic. Explicabo consequatur facilis sint earum. Ratione ipsa nisi nihil quis accusamus eum qui ex.</p><p>Eum maxime ut quas vitae incidunt itaque dolorem amet. Laborum quia qui alias. Laboriosam optio fuga assumenda qui. Ut omnis minus neque perferendis.</p><p>Eius eaque itaque rem mollitia esse voluptates error sint. Quisquam architecto veniam voluptatibus deleniti libero.</p><p>Eos atque aperiam voluptas autem et. Et est tempora vel autem cumque sint. Laboriosam rerum laboriosam eveniet. Laudantium sit eligendi est nostrum ducimus voluptatem nesciunt.</p><p>Quod est et voluptas ut facilis recusandae. Quo qui harum tenetur rerum. Facilis eos ut voluptate quaerat. Explicabo reiciendis praesentium soluta laborum magni dolores suscipit.</p>', 0, '2021-11-18 03:20:42', NULL, NULL),
(8, 'Cupiditate facere et.', 'in-cum-animi-molestiae-id', NULL, 1, 'Sint ad perferendis ad provident minus. Dolorem ut omnis ut vel est vero facere non. Aut corporis porro neque ea. Et consequuntur dolorum ex molestiae molestiae et.', '<p>Impedit deleniti doloribus voluptate placeat explicabo. Voluptate inventore quia vero animi et voluptas. Voluptatum non ipsa sit nostrum voluptates et magnam doloribus.</p><p>Fugiat illum natus omnis aut. Deleniti et error in et beatae doloremque. Et expedita non dolores iste at rerum.</p><p>Illo porro ut beatae assumenda ipsam velit quis minima. Id sit quia explicabo consequuntur recusandae exercitationem dolorem. Nihil ratione odio consequatur nesciunt excepturi eos praesentium et. Ut aut nulla architecto fuga.</p><p>Repellat excepturi repudiandae dicta enim culpa. Quo quae unde saepe rerum repudiandae voluptatum perspiciatis. Aut minima fugit assumenda esse est. Error quae nobis dignissimos. Molestiae suscipit enim nostrum voluptatum sequi.</p><p>Laudantium ratione a ut ipsum sint quo ad asperiores. Perferendis aspernatur eius qui accusantium nesciunt. Et commodi molestias aut maiores atque eos corporis. Sint fugiat sit dignissimos iure enim veniam et itaque.</p><p>Iusto fugiat ullam voluptatibus esse. Hic similique a ipsum ut rem occaecati. Ea explicabo nobis et aperiam est voluptatum. Repellendus hic nesciunt doloremque.</p><p>Quidem nihil laborum qui debitis adipisci. Aperiam aut quia assumenda necessitatibus fuga. Magni voluptates aut saepe quidem molestias laboriosam atque. Vitae omnis officia accusamus aut reiciendis laudantium ab deleniti.</p><p>Quo aut est ut autem sit corporis impedit. Numquam modi dolorem aut sint pariatur. Est officia nisi ullam illum.</p>', 0, '2021-11-18 03:20:42', NULL, NULL),
(9, 'Perspiciatis ut quia praesentium voluptatem veritatis.', 'tempora-id-illum-adipisci-quasi-sit-odit', NULL, 2, 'Corporis et ab quo nulla labore. Quia iusto quasi rerum sed nihil quis. Vitae odit in ut voluptatem.', '<p>Eaque atque dolores consectetur cupiditate. Aut culpa sed veritatis provident sunt. Nam odio sed magnam vitae.</p><p>Vitae natus ducimus commodi molestiae. At et et illo magnam aliquid quae nobis voluptatem. Iusto et laudantium voluptates. Accusamus qui necessitatibus maiores aut perspiciatis voluptate.</p><p>Labore quo rerum quasi quae. Deserunt et aut eum animi quo suscipit. Quibusdam exercitationem quisquam quas odio et doloremque quas. Et placeat nulla molestiae sunt.</p><p>Quo dolor eaque asperiores delectus est labore. Incidunt iste deserunt neque asperiores omnis voluptatem ut repudiandae. Et eos beatae voluptatum quibusdam sequi non non.</p><p>Enim dolore sit nisi officia voluptatibus repellat. Et dolorem est illum adipisci et. Sit temporibus est error sed porro amet optio. Enim veniam quia saepe voluptatem rem ipsa voluptate non.</p><p>Quisquam voluptas eos et commodi tenetur soluta. Consequatur perspiciatis tempore rerum vero qui. Sed nesciunt velit officia ut ipsam. Et modi nostrum sit.</p><p>Voluptatem non fugit alias qui repellendus tempore. Amet a architecto ad. Nihil ipsum asperiores dolores expedita id rerum voluptatem. Eos illum perspiciatis qui nisi aut omnis. Est distinctio autem quia est.</p>', 0, '2021-11-18 03:20:42', NULL, NULL),
(10, 'Id dolorum autem et numquam quis.', 'velit-esse-et-quis-reiciendis', NULL, 1, 'Consequatur asperiores ipsa vero. Nesciunt ipsa et incidunt corporis. Eos ut est cupiditate molestiae consequatur omnis minus autem. Autem nesciunt voluptatem voluptate accusantium mollitia voluptatem.', '<p>Consequatur iure fuga non nemo soluta repellendus maxime. Et est rerum aut rerum et. Qui quidem mollitia accusantium qui similique quibusdam molestiae. Maxime dolorem ut quo qui non dicta. Id tempore illo in itaque id cum impedit.</p><p>Voluptatem placeat fuga rem. Rerum optio et sed cupiditate praesentium laborum asperiores. Quia voluptates doloribus et ex voluptatem. Tempore at autem ea consequatur id hic.</p><p>Nisi libero ipsam aut doloremque et esse. Aut maxime fuga numquam qui maiores mollitia dignissimos nostrum. Corrupti explicabo aliquid quis facilis rerum. Et molestiae est ut enim voluptatem numquam eaque.</p><p>Aut dolores unde sunt nulla odio illo quo. In consequatur sint et dolorem. Quod et ut repudiandae voluptatum. Et neque unde nihil dolorem. Est neque iste esse nulla optio illum.</p><p>Blanditiis placeat voluptatem blanditiis debitis suscipit non. Suscipit culpa laudantium eos voluptate. Qui modi corporis sed accusantium repellendus.</p><p>Quaerat et autem laudantium veritatis iusto. Laboriosam laboriosam qui dolor ut velit dolores. Tenetur unde aut et qui autem.</p><p>Consequatur deleniti ut dolores reiciendis. Cupiditate voluptatem voluptatem delectus reprehenderit. Est et commodi est aut.</p><p>Exercitationem cumque animi error aspernatur. Dolor quibusdam beatae numquam voluptates sunt. Ad voluptatibus est et labore corrupti temporibus voluptatem.</p><p>Error consequatur in vero iusto voluptate quia dolorum. Reiciendis autem amet blanditiis dolorem minima nihil qui. Iste et vel quia.</p>', 0, '2021-11-18 03:20:42', NULL, NULL),
(11, 'judul 1 edit', 'judul-1-edit', 'images/ZXEnMnjVmUzvnUgnHnQbg9cHjpUGCdo55bn9kc2j.jpg', 1, 'test baru halo edit', '<div>test baru halo edit</div>', 13, '2021-11-18 16:35:50', '2021-11-18 09:35:50', '2021-11-25 06:46:19'),
(12, 'judul 2', 'judul-2-2', 'images/BBCsjr4872wWGhGsn0EshR2qOeF4jXlX59CZbwci.jpg', 1, 'body nih edit', '<div>body nih edit</div>', 0, '2021-11-25 13:47:32', '2021-11-25 06:47:32', '2021-11-25 06:47:46'),
(13, 'judul 3', 'judul-3-2', 'images/QTu1DXoWIdNwAqlr8SGbgcrsFHeB3TEIiUjHaAyz.jpg', 1, 'test gambar edit', '<div>test gambar edit</div>', 0, '2021-11-25 13:50:20', '2021-11-25 06:50:20', '2021-11-25 06:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$FmqCn9jP4G5IwVVmbyv0Ve6LA1gR.OcH8MDVGchryfJY.S3th4me6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_nama_unique` (`nama`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_slug_unique` (`slug`),
  ADD KEY `post_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
