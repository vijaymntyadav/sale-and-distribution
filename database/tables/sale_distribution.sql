-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 05:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale_distribution`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_sales`
--

CREATE TABLE `all_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_id` int(11) DEFAULT NULL,
  `rm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asm_id` int(11) DEFAULT NULL,
  `asm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_id` int(11) DEFAULT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `d_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `total_price` longtext COLLATE utf8mb4_unicode_ci,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_writing_store` longtext COLLATE utf8mb4_unicode_ci,
  `cancel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_u_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_u_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_description` longtext COLLATE utf8mb4_unicode_ci,
  `sm_approved` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_approved` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `md_approved` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `md_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `md_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distributor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_sales`
--

INSERT INTO `all_sales` (`id`, `sale_id`, `em_id`, `em_name`, `em_email`, `position`, `m_id`, `m_name`, `m_email`, `rm_id`, `rm_name`, `rm_email`, `asm_id`, `asm_name`, `asm_email`, `e_id`, `e_name`, `e_email`, `d_id`, `d_name`, `d_code`, `division`, `district`, `sub_district`, `postal_code`, `number`, `code`, `organization_name`, `address`, `date`, `mobile_number`, `p_o_number`, `project`, `brand_name`, `product_code`, `product_name`, `category`, `price`, `pieces`, `total_price`, `total_amount`, `commission`, `current_amount`, `old_outstanding`, `total_outstanding`, `amount_writing_store`, `cancel`, `cancel_u_name`, `cancel_u_email`, `cancel_description`, `sm_approved`, `sm_name`, `sm_email`, `account_approved`, `account_name`, `account_email`, `md_approved`, `md_name`, `md_email`, `distributor`, `created_at`, `updated_at`) VALUES
(1, 1, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', 'Dhaka', 'Dhaka', 'Uttara', '1230', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '0', '0', '0', '0', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', '1', '2020-02-12 22:14:49', '2020-02-12 22:27:25'),
(2, 2, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', 'Dhaka', 'Dhaka', 'Uttara', '1230', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', 'something', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-02-13 00:08:13', '2020-02-13 00:08:38'),
(3, 3, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', 'Dhaka', 'Dhaka', 'Uttara', '1230', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', 'Sattar Metal', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '0', '0', '0', '0', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', '1', 'rijwan chowdhury', 'chowdhury007@gmail.com', '1', '2020-02-27 03:51:09', '2020-03-02 01:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `approved_sales`
--

CREATE TABLE `approved_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `all_sale_id` int(11) DEFAULT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `challan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_id` int(11) DEFAULT NULL,
  `rm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asm_id` int(11) DEFAULT NULL,
  `asm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_id` int(11) DEFAULT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `d_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `pieces_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` longtext COLLATE utf8mb4_unicode_ci,
  `add_pieces` longtext COLLATE utf8mb4_unicode_ci,
  `add_pieces_total_price` longtext COLLATE utf8mb4_unicode_ci,
  `sum_of_add_pieces_total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_pieces_total` longtext COLLATE utf8mb4_unicode_ci,
  `final_total_pieces` longtext COLLATE utf8mb4_unicode_ci,
  `amount_of_total_pieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_writing_store` longtext COLLATE utf8mb4_unicode_ci,
  `final_total_price` longtext COLLATE utf8mb4_unicode_ci,
  `amount_of_total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_of_current_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_of_total_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approved_sales`
--

INSERT INTO `approved_sales` (`id`, `sale_id`, `all_sale_id`, `em_id`, `em_name`, `em_email`, `position`, `challan_no`, `m_id`, `m_name`, `m_email`, `rm_id`, `rm_name`, `rm_email`, `asm_id`, `asm_name`, `asm_email`, `e_id`, `e_name`, `e_email`, `d_id`, `d_name`, `d_code`, `division`, `district`, `sub_district`, `postal_code`, `number`, `code`, `organization_name`, `address`, `date`, `mobile_number`, `p_o_number`, `project`, `brand_name`, `product_code`, `product_name`, `category`, `price`, `pieces`, `pieces_total`, `total_price`, `add_pieces`, `add_pieces_total_price`, `sum_of_add_pieces_total_price`, `add_pieces_total`, `final_total_pieces`, `amount_of_total_pieces`, `total_amount`, `commission`, `current_amount`, `old_outstanding`, `total_outstanding`, `amount_writing_store`, `final_total_price`, `amount_of_total_price`, `amount_of_current_amount`, `amount_of_total_outstanding`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '324382749', 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', 'Dhaka', 'Dhaka', 'Uttara', '1230', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '29', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"5\",\"5\",\"5\",\"5\"]', '[250,250,250,250,250,250]', '1500', '30', '[10,10,9,10,10,10]', '59', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '[300,300,300,300,300,300]', '1800', '1710', '6710', '2020-02-12 23:08:33', '2020-02-12 23:08:33'),
(2, 3, 3, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '244019701', 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', 'Dhaka', 'Dhaka', 'Uttara', '1230', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', 'Sattar Metal', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '29', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",0,0,0,0]', '[250,250,0,0,0,0]', '500', '10', '[10,10,\"4\",\"5\",\"5\",\"5\"]', '39', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '[300,300,\"50\",\"50\",\"50\",\"50\"]', '800', '760', '5760', '2020-03-02 01:30:59', '2020-03-02 01:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_description` longtext COLLATE utf8mb4_unicode_ci,
  `brand_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `brand_status`, `created_at`, `updated_at`) VALUES
(26, 'Sattar Metal', 'Enriched Bathroom Fittings, the best you may get within the border. Awarded The Best Metal product Manufacturer of Bangladesh.', 'active', '2019-10-23 22:07:50', '2020-02-25 00:42:58'),
(27, 'Sattar Kitchen', 'kitchen fittings.', 'active', '2020-02-25 00:54:11', '2020-02-25 00:54:11'),
(28, 'Ceramics(Mask)', 'Creamics Tiles offered by Sattar', 'active', '2020-02-25 00:55:24', '2020-02-25 00:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `challans`
--

CREATE TABLE `challans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `all_sale_id` int(11) DEFAULT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `challan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `pieces_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_pieces` longtext COLLATE utf8mb4_unicode_ci,
  `add_pieces_total` longtext COLLATE utf8mb4_unicode_ci,
  `final_total_pieces` longtext COLLATE utf8mb4_unicode_ci,
  `amount_of_total_pieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `challans`
--

INSERT INTO `challans` (`id`, `sale_id`, `all_sale_id`, `em_id`, `em_name`, `em_email`, `position`, `challan_no`, `number`, `code`, `organization_name`, `address`, `date`, `mobile_number`, `p_o_number`, `project`, `brand_name`, `product_code`, `product_name`, `category`, `pieces`, `pieces_total`, `add_pieces`, `add_pieces_total`, `final_total_pieces`, `amount_of_total_pieces`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '324382749', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '29', '[\"5\",\"5\",\"5\",\"5\",\"5\",\"5\"]', '30', '[10,10,9,10,10,10]', '59', '2020-02-12 23:08:33', '2020-02-12 23:08:33'),
(2, 3, 3, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '244019701', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', 'Sattar Metal', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '29', '[\"5\",\"5\",0,0,0,0]', '10', '[10,10,\"4\",\"5\",\"5\",\"5\"]', '39', '2020-03-02 01:30:59', '2020-03-02 01:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commission` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `commission`, `status`, `created_at`, `updated_at`) VALUES
(5, 5, 'active', '2020-01-19 04:59:50', '2020-01-19 04:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `manager_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regional_manager_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional_manager_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional_manager_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_sales_manager_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_sales_manager_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_sales_manager_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dealer_reports`
--

CREATE TABLE `dealer_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_reports`
--

CREATE TABLE `employee_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entry_visits`
--

CREATE TABLE `entry_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `out_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entry_visits`
--

INSERT INTO `entry_visits` (`id`, `em_id`, `em_name`, `em_email`, `dealer_name`, `date`, `in_time`, `out_time`, `order_status`, `mode_of_transport`, `created_at`, `updated_at`) VALUES
(1, 29, 'dealer', 'dealer@gmail.com', 'dealer name', '2020-01-29', '05:08:23', '05:08:23', 'pending', 'bus', '2020-02-25 23:25:36', '2020-02-25 23:25:36'),
(2, 29, 'dealer', 'dealer@gmail.com', 'dealer name', '2020-01-30', '05:08:23', '05:08:23', 'pending', 'bus', '2020-02-26 00:28:33', '2020-02-26 00:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `hierarchies`
--

CREATE TABLE `hierarchies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regional_manager_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional_manager_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional_manager_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_sales_manager_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_sales_manager_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_sales_manager_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `executive_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hierarchies`
--

INSERT INTO `hierarchies` (`id`, `manager_id`, `manager_email`, `manager_name`, `regional_manager_id`, `regional_manager_name`, `regional_manager_email`, `area_sales_manager_id`, `area_sales_manager_email`, `area_sales_manager_name`, `executive_id`, `executive_email`, `executive_name`, `created_at`, `updated_at`) VALUES
(1, '36', 'sattar_metal@gmail.com', 'sattar metal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-08 22:09:10', '2020-02-08 22:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `hierarchy_wise_products`
--

CREATE TABLE `hierarchy_wise_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_id` int(11) DEFAULT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_id` int(11) DEFAULT NULL,
  `rm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asm_id` int(11) DEFAULT NULL,
  `asm_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_id` int(11) DEFAULT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `d_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hierarchy_wise_products`
--

INSERT INTO `hierarchy_wise_products` (`id`, `m_id`, `m_name`, `m_email`, `rm_id`, `rm_name`, `rm_email`, `asm_id`, `asm_name`, `asm_email`, `e_id`, `e_name`, `e_email`, `d_id`, `d_name`, `d_code`, `product_code`, `product_name`, `category`, `price`, `pieces`, `created_at`, `updated_at`) VALUES
(1, 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', '002', 'Bath Tub Mixer Royal With Hand Shower', 'Coaster+A Head', '50', '20', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(2, 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', '002', 'Bath Tub Mixer Royal With Hand Shower', 'Essco Head', '50', '20', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(3, 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', '002', 'Bath Tub Mixer Royal With Hand Shower', 'Star Head', '50', '13', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(4, 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', '006', 'Fixed Basin Mixer (Heavy)', 'Coaster+A Head', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(5, 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', '78644', 'Single Lever Conceal Super Spout Mixer 3/4\'', 'Single Lever', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(6, 36, 'sattar metal', 'sattar_metal@gmail.com', 0, '0', '0', 0, '0', '0', 0, '0', '0', 0, '0', '0', '0052', 'Piller Cock (Pony)', 'Others', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `all_sale_id` int(11) DEFAULT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `challan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `pieces_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` longtext COLLATE utf8mb4_unicode_ci,
  `add_pieces` longtext COLLATE utf8mb4_unicode_ci,
  `add_pieces_total_price` longtext COLLATE utf8mb4_unicode_ci,
  `sum_of_add_pieces_total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_pieces_total` longtext COLLATE utf8mb4_unicode_ci,
  `final_total_pieces` longtext COLLATE utf8mb4_unicode_ci,
  `amount_of_total_pieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_writing_store` longtext COLLATE utf8mb4_unicode_ci,
  `final_total_price` longtext COLLATE utf8mb4_unicode_ci,
  `amount_of_total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_of_current_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_of_total_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `sale_id`, `all_sale_id`, `em_id`, `em_name`, `em_email`, `position`, `challan_no`, `number`, `code`, `organization_name`, `address`, `date`, `mobile_number`, `p_o_number`, `project`, `brand_name`, `product_code`, `product_name`, `category`, `price`, `pieces`, `pieces_total`, `total_price`, `add_pieces`, `add_pieces_total_price`, `sum_of_add_pieces_total_price`, `add_pieces_total`, `final_total_pieces`, `amount_of_total_pieces`, `total_amount`, `commission`, `current_amount`, `old_outstanding`, `total_outstanding`, `amount_writing_store`, `final_total_price`, `amount_of_total_price`, `amount_of_current_amount`, `amount_of_total_outstanding`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '324382749', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '29', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"5\",\"5\",\"5\",\"5\"]', '[250,250,250,250,250,250]', '1500', '30', '[10,10,9,10,10,10]', '59', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '[300,300,300,300,300,300]', '1800', '1710', '6710', '2020-02-12 23:08:33', '2020-02-12 23:08:33'),
(2, 3, 3, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '244019701', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', 'Sattar Metal', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '29', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",0,0,0,0]', '[250,250,0,0,0,0]', '500', '10', '[10,10,\"4\",\"5\",\"5\",\"5\"]', '39', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', '[300,300,\"50\",\"50\",\"50\",\"50\"]', '800', '760', '5760', '2020-03-02 01:30:59', '2020-03-02 01:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `location_wise_products`
--

CREATE TABLE `location_wise_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_wise_products`
--

INSERT INTO `location_wise_products` (`id`, `division`, `district`, `sub_district`, `postal_code`, `product_code`, `product_name`, `category`, `price`, `pieces`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Dhaka', 'Uttara', '1230', '002', 'Bath Tub Mixer Royal With Hand Shower', 'Coaster+A Head', '50', '20', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(2, 'Dhaka', 'Dhaka', 'Uttara', '1230', '002', 'Bath Tub Mixer Royal With Hand Shower', 'Essco Head', '50', '20', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(3, 'Dhaka', 'Dhaka', 'Uttara', '1230', '002', 'Bath Tub Mixer Royal With Hand Shower', 'Star Head', '50', '13', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(4, 'Dhaka', 'Dhaka', 'Uttara', '1230', '006', 'Fixed Basin Mixer (Heavy)', 'Coaster+A Head', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(5, 'Dhaka', 'Dhaka', 'Uttara', '1230', '78644', 'Single Lever Conceal Super Spout Mixer 3/4\'', 'Single Lever', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(6, 'Dhaka', 'Dhaka', 'Uttara', '1230', '0052', 'Piller Cock (Pony)', 'Others', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_29_095241_add_columns_to_the_user', 2),
(4, '2019_08_29_104241_add_column_to_the_user', 3),
(5, '2019_08_31_064926_add_columnd_to_the_users', 4),
(7, '2019_09_04_071027_create_product_categories_table', 6),
(8, '2019_09_03_085814_create_products_table', 7),
(9, '2019_09_08_111159_create_brands_table', 7),
(13, '2019_09_18_053820_creat_product_categories_table', 8),
(14, '2019_09_18_094407_add_columns_to_product_categories_table', 9),
(19, '2019_09_25_060107_create_stock_table', 12),
(35, '2019_10_22_082703_add_columns_product_category_table', 20),
(39, '2019_10_24_040142_add_column_user_table', 22),
(40, '2019_10_24_045030_add_columns_product_category_table', 23),
(41, '2019_10_24_053934_add_columns_stock_table', 24),
(80, '2019_11_07_051505_create_permissions_table', 30),
(81, '2019_11_07_051722_create_permission_role_table', 30),
(83, '2019_11_07_052007_create_role_user_table', 31),
(84, '2019_11_05_092108_create_roles_table', 32),
(86, '2019_10_07_063736_create_warehouses_table', 33),
(103, '2016_06_01_000001_create_oauth_auth_codes_table', 38),
(104, '2016_06_01_000002_create_oauth_access_tokens_table', 38),
(105, '2016_06_01_000003_create_oauth_refresh_tokens_table', 38),
(106, '2016_06_01_000004_create_oauth_clients_table', 38),
(107, '2016_06_01_000005_create_oauth_personal_access_clients_table', 38),
(123, '2020_01_04_064120_create_loacations_table', 43),
(124, '2020_01_04_064147_create_reports_table', 43),
(125, '2020_01_04_064106_create_hierarchies_table', 44),
(127, '2020_01_19_060915_add_columns_stock_table', 46),
(128, '2020_01_19_061234_add_columns_warehouse_table', 47),
(129, '2020_01_19_091606_create_commissions_table', 48),
(132, '2020_01_21_055617_create_employee_reports_table', 49),
(133, '2020_01_21_055633_create_dealer_reports_table', 49),
(139, '2019_10_02_041035_create_sales_table', 50),
(140, '2019_12_08_043110_create_all_sales_table', 50),
(141, '2020_01_12_095747_create_dealers_table', 51),
(151, '2019_12_19_050654_create_challan_table', 53),
(153, '2019_12_19_063426_create_invoices_table', 54),
(154, '2019_12_21_080526_create_approved_sales_table', 55),
(155, '2020_01_30_043326_create_hierarchy_wise_products_table', 56),
(156, '2020_01_30_043431_create_location_wise_products_table', 56),
(157, '2020_01_30_043506_create_product_wise_sales_table', 56),
(158, '2020_02_02_044613_add_columns_approved_sale_table', 57),
(163, '2020_02_02_094450_create_entry_visits_table', 58),
(164, '2020_02_02_094508_create_next_visits_table', 58),
(167, '2020_02_20_064935_create_returns_table', 59),
(168, '2020_02_27_072355_add_columns_sales_table', 60),
(169, '2020_02_27_072433_add_columns_all_sales_table', 60),
(170, '2020_02_27_072537_add_columns_approved_sales_table', 60),
(171, '2020_02_27_094432_add_column_to_invoice_table', 61),
(172, '2020_02_27_094457_add_column_to_challan_table', 61);

-- --------------------------------------------------------

--
-- Table structure for table `next_visits`
--

CREATE TABLE `next_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entry_id` int(11) DEFAULT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `out_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance_from_previous_station` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `next_visits`
--

INSERT INTO `next_visits` (`id`, `entry_id`, `em_id`, `em_name`, `em_email`, `dealer_name`, `date`, `in_time`, `out_time`, `order_status`, `collection_status`, `mode_of_transport`, `distance_from_previous_station`, `created_at`, `updated_at`) VALUES
(1, 1, 29, 'dealer', 'dealer@gmail.com', 'dealer name', '2020-01-29', '05:08:23', '05:08:23', 'pending', 'success', 'bus', '2m', '2020-02-25 23:25:41', '2020-02-25 23:25:41'),
(2, 1, 29, 'dealer', 'dealer@gmail.com', 'dealer name', '2020-01-29', '05:08:23', '05:08:23', 'pending', 'success', 'bus', '2m', '2020-02-25 23:27:08', '2020-02-25 23:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('58981c9eb166325b08a3fc93801958a526030ca40b9fd1501f73faa3eb96919455d222a375c99e8b', 1, 1, 'MyApp', '[]', 0, '2019-12-16 22:56:20', '2019-12-16 22:56:20', '2020-12-17 04:56:20'),
('bd37a45e321de172779c72c92f603ca358912111454b04ad778b78b13e5adbe22cd9c10446d4e436', 1, 1, 'MyApp', '[]', 0, '2019-12-16 22:56:50', '2019-12-16 22:56:50', '2020-12-17 04:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Distribution Personal Access Client', 'VpJmlZZ6alzOWCGE45cp5WpoJL3u2dOvGEqtseZ6', 'http://localhost', 1, 0, 0, '2019-12-15 02:16:43', '2019-12-15 02:16:43'),
(2, NULL, 'Distribution Password Grant Client', 'Vk1MZCDBOfecw8WhvlsyjqOr1W4YTcJJGLz2i63x', 'http://localhost', 0, 1, 0, '2019-12-15 02:16:43', '2019-12-15 02:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-12-15 02:16:43', '2019-12-15 02:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission_name`, `permission_for`, `created_at`, `updated_at`) VALUES
(35, 'all_user', 'users', '2020-02-08 00:33:54', '2020-02-08 00:33:54'),
(36, 'create_user', 'users', '2020-02-08 00:35:08', '2020-02-08 00:35:08'),
(37, 'details', 'users', '2020-02-08 00:35:57', '2020-02-08 00:35:57'),
(38, 'edit', 'users', '2020-02-08 00:36:31', '2020-02-08 00:36:31'),
(39, 'delete', 'users', '2020-02-08 00:37:46', '2020-02-08 00:37:46'),
(40, 'product_categories', 'product&brand', '2020-02-08 00:39:21', '2020-02-08 00:39:21'),
(41, 'add_product_categories', 'product&brand', '2020-02-08 00:40:14', '2020-02-08 00:40:14'),
(42, 'brands', 'product&brand', '2020-02-08 00:40:59', '2020-02-08 00:40:59'),
(43, 'add_brand', 'product&brand', '2020-02-08 00:41:39', '2020-02-08 00:41:39'),
(44, 'product_categories_edit', 'product&brand', '2020-02-08 00:42:33', '2020-02-08 00:42:33'),
(45, 'product_categories_delete', 'product&brand', '2020-02-08 00:43:23', '2020-02-08 00:43:23'),
(46, 'brands_edit', 'product&brand', '2020-02-08 00:44:25', '2020-02-08 00:44:25'),
(47, 'brands_delete', 'product&brand', '2020-02-08 00:45:02', '2020-02-08 00:45:02'),
(48, 'stock_index', 'stock', '2020-02-08 00:46:40', '2020-02-08 00:46:40'),
(49, 'stock_create', 'stock', '2020-02-08 00:47:17', '2020-02-08 00:47:17'),
(50, 'details', 'stock', '2020-02-08 00:47:59', '2020-02-08 00:47:59'),
(51, 'download', 'stock', '2020-02-08 00:48:32', '2020-02-08 00:48:32'),
(52, 'edit', 'stock', '2020-02-08 00:49:05', '2020-02-08 00:49:05'),
(53, 'delete', 'stock', '2020-02-08 00:49:29', '2020-02-08 00:49:29'),
(54, 'commission_index', 'commission', '2020-02-08 00:50:06', '2020-02-08 00:50:06'),
(55, 'commission_create', 'commission', '2020-02-08 00:50:39', '2020-02-08 00:50:39'),
(56, 'edit', 'commission', '2020-02-08 00:51:44', '2020-02-08 00:51:44'),
(57, 'delete', 'commission', '2020-02-08 00:52:10', '2020-02-08 00:52:10'),
(58, 'index', 'sm_nsm_agm', '2020-02-08 00:54:20', '2020-02-08 00:54:20'),
(59, 'index', 'account', '2020-02-08 00:55:32', '2020-02-08 00:55:32'),
(60, 'index', 'md_ed', '2020-02-08 00:57:57', '2020-02-08 00:57:57'),
(61, 'stock_status', 'warehouse', '2020-02-08 00:58:48', '2020-02-08 00:58:48'),
(62, 'edit', 'warehouse', '2020-02-08 00:59:19', '2020-02-08 00:59:19'),
(63, 'delete', 'warehouse', '2020-02-08 00:59:47', '2020-02-08 00:59:47'),
(64, 'index', 'distribution', '2020-02-08 01:02:11', '2020-02-08 01:02:11'),
(65, 'index', 'challan', '2020-02-08 01:04:33', '2020-02-08 01:04:33'),
(66, 'challan', 'challan', '2020-02-08 01:06:30', '2020-02-08 01:06:30'),
(67, 'additional', 'challan', '2020-02-08 01:07:02', '2020-02-08 01:07:02'),
(68, 'total', 'challan', '2020-02-08 01:07:35', '2020-02-08 01:07:35'),
(69, 'delete', 'challan', '2020-02-08 01:08:01', '2020-02-08 01:08:01'),
(70, 'index', 'invoice', '2020-02-08 01:08:42', '2020-02-08 01:08:42'),
(71, 'invoice', 'invoice', '2020-02-08 01:09:49', '2020-02-08 01:09:49'),
(72, 'additional', 'invoice', '2020-02-08 01:10:25', '2020-02-08 01:10:25'),
(73, 'total', 'invoice', '2020-02-08 01:10:55', '2020-02-08 01:10:55'),
(74, 'delete', 'invoice', '2020-02-08 01:11:24', '2020-02-08 01:11:24'),
(75, 'index', 'approved_sale', '2020-02-08 01:15:28', '2020-02-08 01:15:28'),
(76, 'challan', 'approved_sale', '2020-02-08 01:16:56', '2020-02-08 01:16:56'),
(77, 'additional_challan', 'approved_sale', '2020-02-08 01:17:38', '2020-02-08 01:17:38'),
(78, 'total_challan', 'approved_sale', '2020-02-08 01:18:12', '2020-02-08 01:18:12'),
(79, 'invoice', 'approved_sale', '2020-02-08 01:18:47', '2020-02-08 01:18:47'),
(80, 'additional_invoice', 'approved_sale', '2020-02-08 01:19:21', '2020-02-08 01:19:21'),
(81, 'total_invoice', 'approved_sale', '2020-02-08 01:20:03', '2020-02-08 01:20:03'),
(82, 'delete', 'approved_sale', '2020-02-08 01:20:35', '2020-02-08 01:20:35'),
(83, 'index', 'cancel_sale', '2020-02-08 01:22:09', '2020-02-08 01:22:09'),
(84, 'invoice', 'cancel_sale', '2020-02-08 01:23:30', '2020-02-08 01:23:30'),
(85, 'challan', 'cancel_sale', '2020-02-08 01:24:10', '2020-02-08 01:24:10'),
(86, 'delete', 'cancel_sale', '2020-02-08 01:24:46', '2020-02-08 01:24:46'),
(87, 'sale_report', 'report', '2020-02-08 01:25:55', '2020-02-08 01:25:55'),
(88, 'hierarchy_wise_report', 'report', '2020-02-08 01:27:43', '2020-02-08 01:27:43'),
(89, 'location_wise_report', 'report', '2020-02-08 01:28:14', '2020-02-08 01:28:14'),
(90, 'product_wise_sale', 'report', '2020-02-08 01:28:49', '2020-02-08 01:28:49'),
(91, 'index', 'daily_report', '2020-02-08 01:29:35', '2020-02-08 01:29:35'),
(92, 'delete', 'daily_report', '2020-02-08 01:30:10', '2020-02-08 01:30:10'),
(93, 'role_index', 'role', '2020-02-08 01:33:27', '2020-02-08 01:33:27'),
(94, 'create_role', 'role', '2020-02-08 01:34:00', '2020-02-08 01:34:00'),
(95, 'edit', 'role', '2020-02-08 01:34:29', '2020-02-08 01:34:29'),
(96, 'delete', 'role', '2020-02-08 01:34:57', '2020-02-08 01:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(124, 10, 36, NULL, NULL),
(128, 10, 40, NULL, NULL),
(129, 10, 41, NULL, NULL),
(130, 10, 42, NULL, NULL),
(131, 10, 43, NULL, NULL),
(132, 10, 44, NULL, NULL),
(133, 10, 45, NULL, NULL),
(134, 10, 46, NULL, NULL),
(135, 10, 47, NULL, NULL),
(136, 10, 48, NULL, NULL),
(137, 10, 49, NULL, NULL),
(138, 10, 50, NULL, NULL),
(139, 10, 51, NULL, NULL),
(140, 10, 52, NULL, NULL),
(141, 10, 53, NULL, NULL),
(146, 10, 58, NULL, NULL),
(147, 10, 59, NULL, NULL),
(148, 10, 60, NULL, NULL),
(149, 10, 61, NULL, NULL),
(150, 10, 62, NULL, NULL),
(151, 10, 63, NULL, NULL),
(152, 10, 64, NULL, NULL),
(153, 10, 65, NULL, NULL),
(154, 10, 66, NULL, NULL),
(155, 10, 67, NULL, NULL),
(156, 10, 68, NULL, NULL),
(157, 10, 69, NULL, NULL),
(158, 10, 70, NULL, NULL),
(159, 10, 71, NULL, NULL),
(160, 10, 72, NULL, NULL),
(161, 10, 73, NULL, NULL),
(162, 10, 74, NULL, NULL),
(163, 10, 75, NULL, NULL),
(170, 10, 82, NULL, NULL),
(171, 10, 83, NULL, NULL),
(172, 10, 84, NULL, NULL),
(173, 10, 85, NULL, NULL),
(174, 10, 86, NULL, NULL),
(175, 10, 87, NULL, NULL),
(179, 10, 91, NULL, NULL),
(180, 10, 92, NULL, NULL),
(185, 10, 93, NULL, NULL),
(186, 10, 94, NULL, NULL),
(187, 10, 95, NULL, NULL),
(188, 10, 96, NULL, NULL),
(189, 10, 35, NULL, NULL),
(190, 10, 37, NULL, NULL),
(191, 10, 38, NULL, NULL),
(192, 10, 39, NULL, NULL),
(193, 10, 54, NULL, NULL),
(194, 10, 55, NULL, NULL),
(195, 10, 56, NULL, NULL),
(196, 10, 57, NULL, NULL),
(197, 10, 76, NULL, NULL),
(198, 10, 77, NULL, NULL),
(199, 10, 78, NULL, NULL),
(200, 10, 79, NULL, NULL),
(201, 10, 80, NULL, NULL),
(202, 10, 81, NULL, NULL),
(203, 10, 88, NULL, NULL),
(204, 10, 89, NULL, NULL),
(205, 10, 90, NULL, NULL),
(206, 13, 35, NULL, NULL),
(207, 13, 36, NULL, NULL),
(208, 13, 37, NULL, NULL),
(209, 13, 38, NULL, NULL),
(210, 13, 39, NULL, NULL),
(211, 13, 40, NULL, NULL),
(212, 13, 41, NULL, NULL),
(213, 13, 42, NULL, NULL),
(214, 13, 43, NULL, NULL),
(215, 13, 44, NULL, NULL),
(216, 13, 45, NULL, NULL),
(217, 13, 46, NULL, NULL),
(218, 13, 47, NULL, NULL),
(219, 13, 48, NULL, NULL),
(220, 13, 49, NULL, NULL),
(221, 13, 50, NULL, NULL),
(222, 13, 51, NULL, NULL),
(223, 13, 52, NULL, NULL),
(224, 13, 53, NULL, NULL),
(225, 13, 54, NULL, NULL),
(226, 13, 55, NULL, NULL),
(227, 13, 56, NULL, NULL),
(228, 13, 57, NULL, NULL),
(229, 13, 58, NULL, NULL),
(230, 13, 59, NULL, NULL),
(231, 13, 60, NULL, NULL),
(232, 13, 61, NULL, NULL),
(233, 13, 62, NULL, NULL),
(234, 13, 63, NULL, NULL),
(235, 13, 64, NULL, NULL),
(236, 13, 65, NULL, NULL),
(237, 13, 66, NULL, NULL),
(238, 13, 67, NULL, NULL),
(239, 13, 68, NULL, NULL),
(240, 13, 69, NULL, NULL),
(241, 13, 70, NULL, NULL),
(242, 13, 71, NULL, NULL),
(243, 13, 72, NULL, NULL),
(244, 13, 73, NULL, NULL),
(245, 13, 74, NULL, NULL),
(246, 13, 75, NULL, NULL),
(247, 13, 76, NULL, NULL),
(248, 13, 77, NULL, NULL),
(249, 13, 78, NULL, NULL),
(250, 13, 79, NULL, NULL),
(251, 13, 80, NULL, NULL),
(252, 13, 81, NULL, NULL),
(253, 13, 82, NULL, NULL),
(254, 13, 83, NULL, NULL),
(255, 13, 84, NULL, NULL),
(256, 13, 85, NULL, NULL),
(257, 13, 86, NULL, NULL),
(258, 13, 87, NULL, NULL),
(259, 13, 88, NULL, NULL),
(260, 13, 89, NULL, NULL),
(261, 13, 90, NULL, NULL),
(262, 13, 91, NULL, NULL),
(263, 13, 92, NULL, NULL),
(264, 13, 93, NULL, NULL),
(265, 13, 94, NULL, NULL),
(266, 13, 95, NULL, NULL),
(267, 13, 96, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Setcolbd',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `product_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `brand_name`, `product_name`, `product_code`, `product_image`, `category`, `price`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'Sattar Metal', 'Bath Tub Mixer Royal With Hand Shower', '002', 'p_1578829980.png', 'Coaster+A Head', 4360, 'Active', '2020-01-12 05:53:00', '2020-01-12 05:53:00'),
(2, 'Sattar Metal', 'Bath Tub Mixer Royal With Hand Shower', '002', 'p_1578830080.png', 'Essco Head', 4360, 'Active', '2020-01-12 05:54:40', '2020-01-12 05:54:40'),
(3, 'Sattar Metal', 'Bath Tub Mixer Royal With Hand Shower', '002', 'p_1578830124.png', 'Star Head', 4460, 'Active', '2020-01-12 05:55:24', '2020-01-12 05:55:24'),
(4, 'Sattar Metal', 'Special Fixed Basin Mixer', '004', 'p_1578830340.png', 'Coaster+A Head', 2695, 'Active', '2020-01-12 05:59:00', '2020-01-12 05:59:00'),
(5, 'Sattar Metal', 'Special Fixed Basin Mixer', '004', 'p_1578830482.png', 'Essco Head', 2695, 'Active', '2020-01-12 06:01:22', '2020-01-12 06:01:22'),
(6, 'Sattar Metal', 'Special Fixed Basin Mixer', '004', 'p_1578830526.png', 'Star Head', 2975, 'Active', '2020-01-12 06:02:06', '2020-01-12 06:02:06'),
(7, 'Sattar Metal', 'Fixed Basin Mixer (Heavy)', '006', 'p_1578830649.png', 'Coaster+A Head', 2475, 'Active', '2020-01-12 06:04:09', '2020-01-12 06:09:04'),
(8, 'Sattar Metal', 'Fixed Basin Mixer (Heavy)', '006', 'p_1578831132.png', 'Essco Head', 2475, 'Active', '2020-01-12 06:12:12', '2020-01-12 06:12:12'),
(9, 'Sattar Metal', 'Fixed Basin Mixer (Heavy)', '006', 'p_1578831174.png', 'Star Head', 2578, 'Active', '2020-01-12 06:12:54', '2020-01-12 06:12:54'),
(10, 'Sattar Metal', 'Full Moving Basin Mixer', '008', 'p_1578890365.png', 'Coaster+A Head', 2495, 'Active', '2020-01-12 22:39:25', '2020-01-12 22:39:25'),
(11, 'Sattar Metal', 'Full Moving Basin Mixer', '008', 'p_1578890456.png', 'Essco Head', 2495, 'Active', '2020-01-12 22:40:56', '2020-01-12 22:40:56'),
(12, 'Sattar Metal', 'Full Moving Basin Mixer', '008', 'p_1578890484.png', 'Star Head', 2612, 'Active', '2020-01-12 22:41:24', '2020-01-12 22:41:24'),
(13, 'Sattar Metal', 'Long Piller Cock', '0017', 'p_1578890553.png', 'Coaster A+ Head', 1115, 'Active', '2020-01-12 22:42:33', '2020-01-13 03:37:28'),
(14, 'Sattar Metal', 'Long Piller Cock', '0017', 'p_1578890594.png', 'Essco Head', 1115, 'Active', '2020-01-12 22:43:14', '2020-01-13 03:37:23'),
(15, 'Sattar Metal', 'Long Piller Cock', '0017', 'p_1578890620.png', 'Star Head', 1165, 'Active', '2020-01-12 22:43:40', '2020-01-13 03:37:17'),
(16, 'Sattar Metal', 'Moving Piller Cock', '0018', 'p_1578890724.png', 'Coaster A+ Head', 1565, 'Active', '2020-01-12 22:45:24', '2020-01-13 03:37:11'),
(17, 'Sattar Metal', 'Moving Piller Cock', '0018', 'p_1578890773.png', 'Essco Head', 1565, 'Active', '2020-01-12 22:46:13', '2020-01-13 03:37:04'),
(18, 'Sattar Metal', 'Moving Piller Cock', '0018', 'p_1578890805.png', 'Star Head', 1620, 'Active', '2020-01-12 22:46:45', '2020-01-13 03:36:59'),
(19, 'Sattar Metal', 'Sink Mixer', '0010', 'p_1578890899.png', 'Coaster+A Head', 2832, 'Active', '2020-01-12 22:48:19', '2020-01-12 22:48:19'),
(20, 'Sattar Metal', 'Sink Mixer', '0010', 'p_1578890927.png', 'Essco Head', 2830, 'Active', '2020-01-12 22:48:47', '2020-01-12 22:48:47'),
(21, 'Sattar Metal', 'Sink Mixer', '0010', 'p_1578891035.png', 'Star Head', 2930, 'Active', '2020-01-12 22:50:35', '2020-01-12 22:50:35'),
(22, 'Sattar Metal', 'Moving Sink Cock', '0013', 'p_1578891642.png', 'Coaster+A Head', 1455, 'Active', '2020-01-12 23:00:42', '2020-01-12 23:00:42'),
(23, 'Sattar Metal', 'Moving Sink Cock', '0013', 'p_1578891761.png', 'Essco Head', 1455, 'Active', '2020-01-12 23:02:41', '2020-01-12 23:02:41'),
(24, 'Sattar Metal', 'Moving Sink Cock', '0013', 'p_1578891789.png', 'Star Head', 1513, 'Active', '2020-01-12 23:03:09', '2020-01-12 23:03:09'),
(25, 'Sattar Metal', 'Sink Bib Cock', '0026', 'p_1578892149.png', 'Coaster+A Head', 1032, 'Active', '2020-01-12 23:09:09', '2020-01-12 23:09:09'),
(26, 'Sattar Metal', 'Sink Bib Cock', '0026', 'p_1578892185.png', 'Essco Head', 1034, 'Active', '2020-01-12 23:09:45', '2020-01-12 23:09:45'),
(27, 'Sattar Metal', 'Sink Bib Cock', '0026', 'p_1578892217.png', 'Star Head', 1085, 'Active', '2020-01-12 23:10:17', '2020-01-12 23:10:17'),
(28, 'Sattar Metal', 'Full Moving Basin Fexible', '101', 'p_1578903944.png', 'Coaster A+ Head', 2495, 'Active', '2020-01-12 23:31:15', '2020-01-13 02:25:44'),
(29, 'Sattar Metal', 'Full Moving Basin Fexible', '101', 'p_1578903938.png', 'Essco Head', 2498, 'Active', '2020-01-12 23:32:44', '2020-01-13 02:25:38'),
(30, 'Sattar Metal', 'Full Moving Basin Fexible', '101', 'p_1578903933.png', 'Star Head', 2610, 'Active', '2020-01-12 23:33:10', '2020-01-13 02:25:33'),
(31, 'Sattar Metal', 'Sink Mixer Fexible', '102', 'p_1578903925.png', 'Coaster A+ Head', 2830, 'Active', '2020-01-12 23:37:43', '2020-01-13 02:25:25'),
(32, 'Sattar Metal', 'Sink Mixer Fexible', '102', 'p_1578903919.png', 'Essco Head', 2830, 'Active', '2020-01-12 23:38:15', '2020-01-13 02:25:19'),
(33, 'Sattar Metal', 'Sink Mixer Fexible', '102', 'p_1578903912.png', 'Star Head', 2910, 'Active', '2020-01-12 23:38:59', '2020-01-13 02:25:12'),
(34, 'Sattar Metal', 'Moving Piller Cock Fexible', '103', 'p_1578903906.png', 'Coaster A+ Head', 1595, 'Active', '2020-01-12 23:42:31', '2020-01-13 03:36:52'),
(35, 'Sattar Metal', 'Moving Piller Cock Fexible', '103', 'p_1578903900.png', 'Essco Head', 1595, 'Active', '2020-01-12 23:43:19', '2020-01-13 03:36:44'),
(36, 'Sattar Metal', 'Moving Piller Cock Fexible', '103', 'p_1578903895.png', 'Star Head', 1660, 'Active', '2020-01-12 23:43:43', '2020-01-13 03:36:37'),
(37, 'Sattar Metal', 'Moving Sink Cock Fexible', '104', 'p_1578903890.png', 'Coaster A+ Head', 1545, 'Active', '2020-01-12 23:45:44', '2020-01-13 02:24:50'),
(38, 'Sattar Metal', 'Moving Sink Cock Fexible', '104', 'p_1578903885.png', 'Essco Head', 1545, 'Active', '2020-01-12 23:46:32', '2020-01-13 02:24:45'),
(39, 'Sattar Metal', 'Moving Sink Cock Fexible', '104', 'p_1578903879.png', 'Star Head', 1595, 'Active', '2020-01-12 23:47:07', '2020-01-13 02:24:39'),
(40, 'Sattar Metal', '1/2\' Conceal Stop Cock (Heavy)', '0019', 'p_1578894537.png', 'Coaster+A Head', 1135, 'Active', '2020-01-12 23:48:57', '2020-01-12 23:48:57'),
(41, 'Sattar Metal', '1/2\' Conceal Stop Cock (Heavy)', '0019', 'p_1578894568.png', 'Essco Head', 1135, 'Active', '2020-01-12 23:49:28', '2020-01-12 23:49:28'),
(42, 'Sattar Metal', '1/2\' Conceal Stop Cock (Heavy)', '0019', 'p_1578894592.png', 'Star Head', 1190, 'Active', '2020-01-12 23:49:52', '2020-01-12 23:49:52'),
(43, 'Sattar Metal', '3/4\' Conceal Stop Cock (Heavy)', '0020', 'p_1578894738.png', 'Coaster+A Head', 1195, 'Active', '2020-01-12 23:52:18', '2020-01-12 23:52:18'),
(44, 'Sattar Metal', '3/4\' Conceal Stop Cock (Heavy)', '0020', 'p_1578894754.png', 'Essco Head', 1195, 'Active', '2020-01-12 23:52:34', '2020-01-12 23:52:34'),
(45, 'Sattar Metal', '3/4\' Conceal Stop Cock (Heavy)', '0020', 'p_1578894821.png', 'Star Head', 1250, 'Active', '2020-01-12 23:53:41', '2020-01-12 23:53:41'),
(46, 'Sattar Metal', '1/2\' Conceal Stop Cock (Premium)', '105', 'p_1578903729.png', 'Coaster A+ Head', 1260, 'Active', '2020-01-12 23:55:41', '2020-01-13 02:22:09'),
(47, 'Sattar Metal', '1/2\' Conceal Stop Cock (Premium)', '105', 'p_1578903874.png', 'Essco Head', 1260, 'Active', '2020-01-12 23:56:01', '2020-01-13 02:24:34'),
(48, 'Sattar Metal', '1/2\' Conceal Stop Cock (Premium)', '105', 'p_1578903868.png', 'Star Head', 1295, 'Active', '2020-01-12 23:56:23', '2020-01-13 02:24:28'),
(49, 'Sattar Metal', '3/4\' Conceal Stop Cock (Premium)', '106', 'p_1578895153.png', 'Coaster+A Head', 1330, 'Active', '2020-01-12 23:59:13', '2020-01-12 23:59:13'),
(50, 'Sattar Metal', '3/4\' Conceal Stop Cock (Premium)', '106', 'p_1578895180.png', 'Essco Head', 1330, 'Active', '2020-01-12 23:59:40', '2020-01-12 23:59:40'),
(51, 'Sattar Metal', '3/4\' Conceal Stop Cock (Premium)', '106', 'p_1578895203.png', 'Star Head', 1372, 'Active', '2020-01-13 00:00:03', '2020-01-13 00:00:03'),
(52, 'Sattar Metal', '1\' Conceal Stop Cock (Premium)', '107', 'p_1578895262.png', 'Coaster+A Head', 1396, 'Active', '2020-01-13 00:01:02', '2020-01-13 00:01:02'),
(53, 'Sattar Metal', '1\' Conceal Stop Cock (Premium)', '107', 'p_1578895294.png', 'Essco Head', 1395, 'Active', '2020-01-13 00:01:34', '2020-01-13 00:01:34'),
(54, 'Sattar Metal', '1\' Conceal Stop Cock (Premium)', '107', 'p_1578895320.png', 'Star Head', 1495, 'Active', '2020-01-13 00:02:00', '2020-01-13 00:02:00'),
(55, 'Sattar Metal', 'Angle Stop Cock', '0024', 'p_1578895437.png', 'Coaster+A Head', 780, 'Active', '2020-01-13 00:03:57', '2020-01-13 00:03:57'),
(56, 'Sattar Metal', 'Angle Stop Cock', '0024', 'p_1578895461.png', 'Essco Head', 780, 'Active', '2020-01-13 00:04:21', '2020-01-13 00:04:21'),
(57, 'Sattar Metal', 'Angle Stop Cock', '0024', 'p_1578895491.png', 'Star Head', 840, 'Active', '2020-01-13 00:04:51', '2020-01-13 00:04:51'),
(58, 'Sattar Metal', 'Two In One Bib Cock', '0025', 'p_1578895546.png', 'Coaster+A Head', 1595, 'Active', '2020-01-13 00:05:46', '2020-01-13 00:05:46'),
(59, 'Sattar Metal', 'Two In One Bib Cock', '0025', 'p_1578895571.png', 'Essco Head', 1595, 'Active', '2020-01-13 00:06:11', '2020-01-13 00:06:11'),
(60, 'Sattar Metal', 'Two In One Bib Cock', '0025', 'p_1578895636.png', 'Star Head', 1705, 'Active', '2020-01-13 00:07:16', '2020-01-13 00:07:16'),
(61, 'Sattar Metal', 'Conceal Bib Cock', '0027', 'p_1578895694.png', 'Coaster+A Head', 920, 'Active', '2020-01-13 00:08:14', '2020-01-13 00:08:14'),
(62, 'Sattar Metal', 'Conceal Bib Cock', '0027', 'p_1578895722.png', 'Essco Head', 920, 'Active', '2020-01-13 00:08:42', '2020-01-13 00:08:42'),
(63, 'Sattar Metal', 'Conceal Bib Cock', '0027', 'p_1578895752.png', 'Star Head', 995, 'Active', '2020-01-13 00:09:12', '2020-01-13 00:09:12'),
(64, 'Sattar Metal', 'Conceal Bib Cock (Without Filter)', '0028', 'p_1578895842.png', 'Coaster+A Head', 910, 'Active', '2020-01-13 00:10:42', '2020-01-13 00:10:42'),
(65, 'Sattar Metal', 'Conceal Bib Cock (Without Filter)', '0028', 'p_1578895879.png', 'Essco Head', 910, 'Active', '2020-01-13 00:11:19', '2020-01-13 00:11:19'),
(66, 'Sattar Metal', 'Conceal Bib Cock (Without Filter)', '0028', 'p_1578895926.png', 'Star Head', 970, 'Active', '2020-01-13 00:12:06', '2020-01-13 00:12:06'),
(67, 'Sattar Metal', 'Single Lever Bath Tub Mixer With Hand Shower', '78601', 'p_1578896671.png', 'Single Lever', 5350, 'Active', '2020-01-13 00:24:31', '2020-01-13 00:24:31'),
(68, 'Sattar Metal', 'Single Lever Bath Tub Mixer With Hand Shower (Orbed)', '78615', 'p_1578896840.png', 'Single Lever', 4495, 'Active', '2020-01-13 00:27:20', '2020-01-13 00:29:33'),
(69, 'Sattar Metal', 'Single Lever Bath Tub Mixer With Hand Shower (Pony)', '78614', 'p_1578897236.png', 'Single Lever', 2995, 'Active', '2020-01-13 00:33:56', '2020-01-13 03:43:46'),
(70, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set 1/2\'', '78602', 'p_1578897855.png', 'Single Lever', 5330, 'Active', '2020-01-13 00:44:15', '2020-01-13 00:46:21'),
(71, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set Super 1/2\'', '78641', 'p_1578897969.png', 'Single Lever', 6405, 'Active', '2020-01-13 00:46:09', '2020-01-13 00:46:09'),
(72, 'Sattar Metal', 'Single Lever Conceal Spout Mixer 1/2\'', '78604', 'p_1578898147.png', 'Single Lever', 4380, 'Active', '2020-01-13 00:49:07', '2020-01-13 00:49:07'),
(73, 'Sattar Metal', 'Single Lever Conceal Super Spout Mixer 1/2\'', '78643', 'p_1578898232.png', 'Single Lever', 5460, 'Active', '2020-01-13 00:50:32', '2020-01-13 00:50:32'),
(74, 'Sattar Metal', 'Single Lever Conceal Shower Mixer 1/2\'', '78608', 'p_1578898761.png', 'Single Lever', 4380, 'Active', '2020-01-13 00:59:21', '2020-01-13 00:59:21'),
(75, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set 3/4\'', '78611', 'p_1578903754.png', 'Single Lever', 5775, 'Active', '2020-01-13 01:02:46', '2020-01-13 02:22:34'),
(76, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set Super 3/4\'', '78642', 'p_1578903742.png', 'Single Lever', 6755, 'Active', '2020-01-13 01:04:37', '2020-01-13 02:22:22'),
(77, 'Sattar Metal', 'Single Lever Conceal Spout Mixer 3/4\'', '78612', 'p_1578903764.png', 'Single Lever', 4730, 'Active', '2020-01-13 01:06:57', '2020-01-13 02:22:44'),
(78, 'Sattar Metal', 'Single Lever Conceal Super Spout Mixer 3/4\'', '78644', 'p_1578899286.png', 'Single Lever', 5810, 'Active', '2020-01-13 01:08:06', '2020-01-13 01:08:06'),
(79, 'Sattar Metal', 'Single Lever Conceal Shower Mixer 3/4\'', '78613', 'p_1578899392.png', 'Single Lever', 4730, 'Active', '2020-01-13 01:09:52', '2020-01-13 01:09:52'),
(80, 'Sattar Metal', 'Square Conceal Shower Mixer Set 1/2\'', '786215', 'p_1578899469.png', 'Single Lever', 5830, 'Active', '2020-01-13 01:11:09', '2020-01-13 01:11:09'),
(81, 'Sattar Metal', 'Square Conceal Spout Mixer 1/2\'', '786217', 'p_1578899542.png', 'Single Lever', 4880, 'Active', '2020-01-13 01:12:22', '2020-01-13 01:12:22'),
(82, 'Sattar Metal', 'Square Conceal Shower Mixer 1/2\'', '786219', 'p_1578899595.png', 'Single Lever', 4880, 'Active', '2020-01-13 01:13:15', '2020-01-13 01:13:15'),
(83, 'Sattar Metal', 'Square Conceal Shower Mixer Set (Super) 1/2\'', '786221', 'p_1578899699.png', 'Single Lever', 6905, 'Active', '2020-01-13 01:14:59', '2020-01-13 01:14:59'),
(84, 'Sattar Metal', 'Square Conceal Super Spout Mixer 1/2\'', '786223', 'p_1578899806.png', 'Single Lever', 5960, 'Active', '2020-01-13 01:16:46', '2020-01-13 01:16:46'),
(85, 'Sattar Metal', 'Square Conceal Shower Mixer Set 3/4\'', '786216', 'p_1578899875.png', 'Single Lever', 6275, 'Active', '2020-01-13 01:17:55', '2020-01-13 01:17:55'),
(86, 'Sattar Metal', 'Square Conceal Spout Mixer 3/4\'', '786218', 'p_1578899960.png', 'Single Lever', 5230, 'Active', '2020-01-13 01:19:20', '2020-01-13 01:19:20'),
(87, 'Sattar Metal', 'Square Conceal Shower Mixer 3/4\'', '786220', 'p_1578900022.png', 'Single Lever', 5230, 'Active', '2020-01-13 01:20:22', '2020-01-13 01:20:22'),
(88, 'Sattar Metal', 'Square Conceal Shower Mixer Set (Super) 3/4\'', '786222', 'p_1578900111.png', 'Single Lever', 7255, 'Active', '2020-01-13 01:21:51', '2020-01-13 01:21:51'),
(89, 'Sattar Metal', 'Square Conceal Super Spout Mixer 3/4\'', '786224', 'p_1578900204.png', 'Single Lever', 6310, 'Active', '2020-01-13 01:23:24', '2020-01-13 01:23:24'),
(90, 'Sattar Metal', 'Elite Conceal Shower Mixer Set 1/2\'', '786227', 'p_1578900286.png', 'Single Lever', 6630, 'Active', '2020-01-13 01:24:46', '2020-01-13 01:24:46'),
(91, 'Sattar Metal', 'Elite Conceal Shower Spout Mixer Set 1/2\'', '786229', 'p_1578900374.png', 'Single Lever', 5680, 'Active', '2020-01-13 01:26:14', '2020-01-13 01:26:14'),
(92, 'Sattar Metal', 'Elite Conceal Shower Mixer 1/2\'', '786231', 'p_1578900451.png', 'Single Lever', 5680, 'Active', '2020-01-13 01:27:31', '2020-01-13 01:27:31'),
(93, 'Sattar Metal', 'Elite Conceal Super Shower Mixer Set 1/2\'', '786233', 'p_1578900550.png', 'Single Lever', 7705, 'Active', '2020-01-13 01:29:10', '2020-01-13 01:29:10'),
(94, 'Sattar Metal', 'Elite Conceal Super Spout Mixer 1/2\'', '786235', 'p_1578900632.png', 'Single Lever', 6760, 'Active', '2020-01-13 01:30:32', '2020-01-13 01:30:32'),
(95, 'Sattar Metal', 'Elite Conceal Shower Mixer Set (Square) 1/2\'', '786228', 'p_1578900719.png', 'Single Lever', 7130, 'Active', '2020-01-13 01:31:59', '2020-01-13 01:31:59'),
(96, 'Sattar Metal', 'Elite Conceal Shower Spout Mixer(Sqaure) 1/2\'', '786230', 'p_1578900804.png', 'Single Lever', 6180, 'Active', '2020-01-13 01:33:24', '2020-01-13 01:33:24'),
(97, 'Sattar Metal', 'Elite Conceal Shower Mixer (Sqaure) 1/2\'', '786232', 'p_1578900874.png', 'Single Lever', 6180, 'Active', '2020-01-13 01:34:34', '2020-01-13 01:34:34'),
(98, 'Sattar Metal', 'Elite Conceal Super Shower Mixer Set(Square) 1/2\'', '786234', 'p_1578900967.png', 'Single Lever', 8205, 'Active', '2020-01-13 01:36:07', '2020-01-13 01:36:07'),
(99, 'Sattar Metal', 'Elite Conceal Super Spout Mixer (Square) 1/2\'', '786236', 'p_1578901055.png', 'Single Lever', 7260, 'Active', '2020-01-13 01:37:35', '2020-01-13 01:37:35'),
(100, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set (3 Lines)', '78670', 'p_1578903656.png', 'Single Lever', 2995, 'Active', '2020-01-13 01:39:28', '2020-01-13 02:20:56'),
(101, 'Sattar Metal', 'Single Lever Basin Mixer (Heavy)', '78603', 'p_1578901217.png', 'Single Lever', 3190, 'Active', '2020-01-13 01:40:17', '2020-01-13 01:40:17'),
(102, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78606', 'p_1578903666.png', 'Single Lever', 5175, 'Active', '2020-01-13 01:41:09', '2020-01-13 02:21:06'),
(103, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78606P', 'p_1578903805.png', 'Single Lever', 5175, 'Active', '2020-01-13 01:42:07', '2020-01-13 02:23:25'),
(104, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78606AA', 'p_1578903814.png', 'Single Lever', 5175, 'Active', '2020-01-13 01:42:47', '2020-01-13 02:23:34'),
(105, 'Sattar Metal', 'Single Lever Sink Mixer (Orbed)', '78616', 'p_1578903825.png', 'Single Lever', 3995, 'Active', '2020-01-13 01:43:57', '2020-01-13 02:23:45'),
(106, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78616P', 'p_1578903795.png', 'Single Lever', 3995, 'Active', '2020-01-13 01:44:34', '2020-01-13 02:23:15'),
(107, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78616AA', 'p_1578903774.png', 'Single Lever', 3995, 'Active', '2020-01-13 01:45:10', '2020-01-13 02:22:54'),
(108, 'Sattar Metal', 'Single Lever Basin Mixer (Crystal)', '78640', 'p_1578901558.png', 'Single Lever', 2990, 'Active', '2020-01-13 01:45:58', '2020-01-13 02:03:13'),
(109, 'Sattar Metal', 'Single Lever Piller Cock (Round)', '78620', 'p_1578902117.png', 'Single Lever', 1595, 'Active', '2020-01-13 01:55:17', '2020-01-13 03:36:26'),
(110, 'Sattar Metal', 'Single Lever Basin Mixer (Special)', '78607', 'p_1578903647.png', 'Single Lever', 3390, 'Active', '2020-01-13 01:56:23', '2020-01-13 02:20:47'),
(111, 'Sattar Metal', 'Single Lever Basin Mixer (Square)', '78684', 'p_1578902282.png', 'Single Lever', 2195, 'Active', '2020-01-13 01:58:02', '2020-01-13 01:58:02'),
(112, 'Sattar Metal', 'Single Lever Basin Mixer (Royal)', '78624', 'p_1578902338.png', 'Single Lever', 4590, 'Active', '2020-01-13 01:58:58', '2020-01-13 01:58:58'),
(113, 'Sattar Metal', 'Single Lever Basin Mixer (Mars)', '78683', 'p_1578903602.png', 'Single Lever', 2995, 'Active', '2020-01-13 02:00:48', '2020-01-13 02:20:02'),
(114, 'Sattar Metal', 'Single Lever Basin Mixer (Orbed)', '78681', 'p_1578902573.png', 'Single Lever', 2195, 'Active', '2020-01-13 02:02:53', '2020-01-13 02:05:12'),
(115, 'Sattar Metal', 'Single Lever Basin Mixer (Pony)', '78682', 'p_1578902677.png', 'Single Lever', 1995, 'Active', '2020-01-13 02:04:37', '2020-01-13 03:43:39'),
(116, 'Sattar Metal', 'Sensor Automatic Piller Cock (Venus)', '78101', 'p_1578903348.png', 'Single Lever', 9200, 'Active', '2020-01-13 02:08:34', '2020-01-13 02:15:48'),
(117, 'Sattar Metal', 'Sensor Automatic Piller Cock (Neptune)', '786102', 'p_1578903638.png', 'Single Lever', 9600, 'Active', '2020-01-13 02:11:28', '2020-01-13 02:20:38'),
(118, 'Sattar Metal', 'Sensor Automatic Piller Cock (Jupiter)', '786103', 'p_1578903368.png', 'Single Lever', 9900, 'Active', '2020-01-13 02:13:53', '2020-01-13 02:16:08'),
(119, 'Sattar Metal', 'Sensor Automatic Piller Cock (Mars)', '786104', 'p_1578903324.png', 'Single Lever', 8900, 'Active', '2020-01-13 02:15:24', '2020-01-13 02:15:24'),
(120, 'Sattar Metal', 'Star Moving Shower', '0031', 'p_1578904082.png', 'Single Lever', 1090, 'Active', '2020-01-13 02:28:02', '2020-01-13 02:28:02'),
(121, 'Sattar Metal', 'Moving Shower Super', '0033', 'p_1578907690.png', 'Single Lever', 1060, 'Active', '2020-01-13 03:28:10', '2020-01-13 03:28:10'),
(122, 'Sattar Metal', 'Moving Shower(Orbed)', '0032', 'p_1578907732.png', 'Single Lever', 695, 'Active', '2020-01-13 03:28:52', '2020-01-13 03:28:52'),
(123, 'Sattar Metal', 'Bib Cock (Orbed)', '0051', 'p_1578907773.png', 'Single Lever', 790, 'Active', '2020-01-13 03:29:33', '2020-01-13 03:29:33'),
(124, 'Sattar Metal', 'Piller Cock (Orbed)', '0053', 'p_1578908001.png', 'Single Lever', 890, 'Active', '2020-01-13 03:33:21', '2020-01-13 03:33:21'),
(125, 'Sattar Metal', 'Piller Cock (Pony)', '0052', 'p_1578908047.png', 'Others', 1030, 'Active', '2020-01-13 03:34:07', '2020-01-13 03:43:32'),
(126, 'Sattar Metal', 'Basin Mixer (Orbed)', '005', 'p_1578908086.png', 'Single Lever', 2195, 'Active', '2020-01-13 03:34:46', '2020-01-13 03:34:46'),
(127, 'Sattar Metal', 'Conceal Stop Cock (Orbed)', '108', 'p_1578908134.png', 'Single Lever', 895, 'Active', '2020-01-13 03:35:34', '2020-01-13 03:35:34'),
(128, 'Sattar Metal', 'Angle Stop Cock (Orbed)', '78680', 'p_1578908563.png', 'Others', 595, 'Active', '2020-01-13 03:42:43', '2020-01-13 03:44:22'),
(129, 'Sattar Metal', 'Angle Stop Cock (Smart)', '78629', 'p_1578908710.png', 'Others', 345, 'Active', '2020-01-13 03:45:10', '2020-01-13 03:45:10'),
(130, 'Sattar Metal', 'Connection Pipe (Super) 24\'', '78630', 'p_1578908788.png', 'Others', 90, 'Active', '2020-01-13 03:46:28', '2020-01-13 03:46:28'),
(131, 'Sattar Metal', 'Dining Towel Bar', '78663', 'p_1578908887.png', 'Others', 1390, 'Active', '2020-01-13 03:48:07', '2020-01-13 03:48:07'),
(132, 'Sattar Metal', 'Pillar Cock (Super)', '78633', 'p_1578909063.png', 'Others', 710, 'Active', '2020-01-13 03:51:03', '2020-01-13 03:51:03'),
(133, 'Sattar Metal', 'Pillar Cock (Smart)', '78634', 'p_1578909125.png', 'Others', 575, 'Active', '2020-01-13 03:52:05', '2020-01-13 03:52:05'),
(134, 'Sattar Metal', 'Bib Cock (Smart)', '78635', 'p_1578909286.png', 'Others', 460, 'Active', '2020-01-13 03:54:46', '2020-01-13 03:54:46'),
(135, 'Sattar Metal', 'Bib Cock (Sqaure)', '78636', 'p_1578909343.png', 'Others', 560, 'Active', '2020-01-13 03:55:43', '2020-01-13 03:55:43'),
(136, 'Sattar Metal', 'Two   -   In   -   One (Smart)', '78637', 'p_1578909449.png', 'Others', 770, 'Active', '2020-01-13 03:57:29', '2020-01-13 04:02:04'),
(137, 'Sattar Metal', 'Two  -  In  -  One (Square)', '78638', 'p_1578910004.png', 'Others', 1485, 'Active', '2020-01-13 04:06:44', '2020-01-13 04:06:44'),
(138, 'Sattar Metal', 'Super Hand Shower', '78656', 'p_1578910057.png', 'Others', 1350, 'Active', '2020-01-13 04:07:37', '2020-01-13 04:07:37'),
(139, 'Sattar Metal', 'Two  -  In  -  One (Super)', '78647', 'p_1578910109.png', 'Others', 730, 'Active', '2020-01-13 04:08:29', '2020-01-13 04:08:29'),
(140, 'Sattar Metal', 'Bib Cock (Super)', '78648', 'p_1578910184.png', 'Others', 460, 'Active', '2020-01-13 04:09:44', '2020-01-13 04:09:44'),
(141, 'Sattar Metal', 'Sink Bib Cock (Super)', '78649', 'p_1578910248.png', 'Others', 590, 'Active', '2020-01-13 04:10:48', '2020-01-13 04:10:48'),
(142, 'Sattar Metal', 'Sink Bib Cock (Smart)', '78653', 'p_1578910293.png', 'Others', 590, 'Active', '2020-01-13 04:11:33', '2020-01-13 04:11:33'),
(143, 'Sattar Metal', 'Pillar Cock (Push)', '78652', 'p_1578910403.png', 'Others', 990, 'Active', '2020-01-13 04:13:23', '2020-01-13 04:13:23'),
(144, 'Sattar Metal', 'Bib Cock (Push)', '78651', 'p_1578910435.png', 'Others', 990, 'Active', '2020-01-13 04:13:55', '2020-01-13 04:13:55'),
(145, 'Sattar Metal', 'Single Lever Bathtub Mixer (Smart)', 'SP-5001', 'p_1578910550.png', 'Others', 2890, 'Active', '2020-01-13 04:15:50', '2020-01-13 04:15:50'),
(146, 'Sattar Metal', 'Single Lever Basin Mixer (Super)', 'SP-5002', 'p_1578910855.png', 'Others', 1925, 'Active', '2020-01-13 04:20:55', '2020-01-13 04:20:55'),
(147, 'Sattar Metal', 'Single Lever Basin Mixer (Smart)', 'SP-5003', 'p_1578910911.png', 'Others', 2195, 'Active', '2020-01-13 04:21:51', '2020-01-13 04:21:51'),
(148, 'Sattar Metal', 'Single Lever Sink Mixer (Smart)', 'SP-5004', 'p_1578910947.png', 'Others', 2340, 'Active', '2020-01-13 04:22:27', '2020-01-13 04:22:27'),
(149, 'Sattar Metal', 'Soap Case (Premium)', '786113', 'p_1578911030.png', 'Others', 1880, 'Active', '2020-01-13 04:23:50', '2020-01-13 04:23:50'),
(150, 'Sattar Metal', 'Soap Case (Royel)', '786114', 'p_1578911104.png', 'Others', 670, 'Active', '2020-01-13 04:25:04', '2020-01-13 04:27:18'),
(151, 'Sattar Metal', 'Soap Case (Imperial)', '786126', 'p_1578911210.png', 'Others', 690, 'Active', '2020-01-13 04:26:50', '2020-01-13 04:26:50'),
(152, 'Sattar Metal', 'Square Towel Rail', '786117', 'p_1578911309.png', 'Others', 595, 'Active', '2020-01-13 04:28:29', '2020-01-13 04:28:29'),
(153, 'Sattar Metal', 'Cloth Hanger', '0045', 'p_1578911354.png', 'Others', 690, 'Active', '2020-01-13 04:29:14', '2020-01-13 04:29:14'),
(154, 'Sattar Metal', '4\' Grating Box Jali', '786123', 'p_1578911465.png', 'Others', 740, 'Active', '2020-01-13 04:31:05', '2020-01-13 04:31:05'),
(155, 'Sattar Metal', '4\' Floor Drain  -  Jupiter', '786212', 'p_1578911558.png', 'Others', 1195, 'Active', '2020-01-13 04:32:38', '2020-01-13 04:32:38'),
(156, 'Sattar Metal', '4\' Floor Drain  -  Mars', '786210', 'p_1578911605.png', 'Others', 1195, 'Active', '2020-01-13 04:33:25', '2020-01-13 04:33:25'),
(157, 'Sattar Metal', '4\' Floor Drain  -  Venus', '786211', 'p_1578911734.png', 'Others', 1195, 'Active', '2020-01-13 04:35:34', '2020-01-13 04:35:34'),
(158, 'Sattar Metal', 'Push Shower', 'PU-777', 'p_1578911914.png', 'Others', 595, 'Active', '2020-01-13 04:36:18', '2020-01-13 04:38:34'),
(159, 'Sattar Metal', 'Push Shower Royel', 'PU-777R', 'p_1578911904.png', 'Others', 795, 'Active', '2020-01-13 04:37:04', '2020-01-13 04:38:24'),
(160, 'Sattar Metal', 'Push Shower Premium', 'PU-888', 'p_1578911881.png', 'Others', 1980, 'Active', '2020-01-13 04:38:01', '2020-01-13 04:38:01'),
(161, 'Sattar Metal', 'F B Push Shower', 'FB-121', 'p_1578911998.png', 'Others', 555, 'Active', '2020-01-13 04:39:58', '2020-01-13 04:39:58'),
(162, 'Sattar Metal', 'Orbed Push Shower', 'PU-555', 'p_1578912038.png', 'Others', 895, 'Active', '2020-01-13 04:40:38', '2020-01-13 04:40:38'),
(163, 'Sattar Metal', 'Long Push Shower', 'PU-666', 'p_1578912072.png', 'Others', 695, 'Active', '2020-01-13 04:41:12', '2020-01-13 04:41:12'),
(164, 'Sattar Metal', 'Orbed Hand Shower', 'HS-444', 'p_1578913447.png', 'Others', 990, 'Active', '2020-01-13 05:04:07', '2020-01-13 05:05:10'),
(165, 'Sattar Metal', 'Round Hand Shower', 'HS-333', 'p_1578913491.png', 'Others', 790, 'Active', '2020-01-13 05:04:51', '2020-01-13 05:04:51'),
(166, 'Sattar Metal', 'Hand Shower (Mars)', 'HS-222', 'p_1578913569.png', 'Others', 1195, 'Active', '2020-01-13 05:06:09', '2020-01-13 05:06:09'),
(167, 'Sattar Metal', 'Hand Shower', 'HS-121', 'p_1578913594.png', 'Others', 1090, 'Active', '2020-01-13 05:06:34', '2020-01-13 05:06:34'),
(168, 'Sattar Metal', 'Hand Shower', 'HS-999', 'p_1578913626.png', 'Others', 1090, 'Active', '2020-01-13 05:07:06', '2020-01-13 05:07:06'),
(169, 'Sattar Metal', 'Hand Shower Chain', 'HC-4848', 'p_1578913717.png', 'Others', 395, 'Active', '2020-01-13 05:08:37', '2020-01-13 05:08:37'),
(170, 'Sattar Metal', 'Urinal Angle Stop Cock Set', '78667', 'p_1578913918.png', 'Others', 975, 'Active', '2020-01-13 05:11:58', '2020-01-13 05:11:58'),
(171, 'Sattar Metal', 'Tulip Ceiling Shower (Shower Only)', '78657', 'p_1578913993.png', 'Others', 490, 'Active', '2020-01-13 05:13:13', '2020-01-13 05:13:13'),
(172, 'Sattar Metal', 'Tulip Ceiling Shower With Pipe', '78658', 'p_1578914044.png', 'Others', 990, 'Active', '2020-01-13 05:14:04', '2020-01-13 05:14:04'),
(173, 'Sattar Metal', 'Square Ceiling Shower (Onlybshower)', '78665', 'p_1578914086.png', 'Others', 1195, 'Active', '2020-01-13 05:14:46', '2020-01-13 05:14:46'),
(174, 'Sattar Metal', 'Square Ceiling Shower With Pipe', '78666', 'p_1578914178.png', 'Others', 1695, 'Active', '2020-01-13 05:16:18', '2020-01-13 05:16:18'),
(175, 'Sattar Metal', 'Round Ceiling Shower (Only Shower)', '78668', 'p_1578914216.png', 'Others', 490, 'Active', '2020-01-13 05:16:56', '2020-01-13 05:16:56'),
(176, 'Sattar Metal', 'Round Ceiling Shower With Pipe', '78669', 'p_1578914257.png', 'Others', 990, 'Active', '2020-01-13 05:17:37', '2020-01-13 05:17:37'),
(177, 'Sattar Metal', 'Orbed Ceiling Shower (Only Shower)', '78671', 'p_1578914310.png', 'Others', 690, 'Active', '2020-01-13 05:18:30', '2020-01-13 05:18:30'),
(178, 'Sattar Metal', 'Orbed Ceiling Shower With Pipe', '78672', 'p_1578914411.png', 'Others', 1190, 'Active', '2020-01-13 05:20:11', '2020-01-13 05:20:11'),
(179, 'Sattar Metal', 'Multipurpose Towel Shelf', '78664', 'p_1578914575.png', 'Others', 2685, 'Active', '2020-01-13 05:22:55', '2020-01-13 05:22:55'),
(180, 'Sattar Metal', 'Multipurpose Towel Shelf (Premium)', '786213', 'p_1578914639.png', 'Others', 9990, 'Active', '2020-01-13 05:23:59', '2020-01-13 05:23:59'),
(181, 'Sattar Metal', 'Double Soap Case (Crown)', '78673', 'p_1578914814.png', 'Others', 1190, 'Active', '2020-01-13 05:26:54', '2020-01-13 05:26:54'),
(182, 'Sattar Metal', 'Dual Piller Cock Fexible', '786214', 'p_1578914878.png', 'Others', 1595, 'Active', '2020-01-13 05:27:58', '2020-01-13 05:27:58'),
(183, 'Sattar Metal', 'Dual Pillar Cock (Mars)', '786225', 'p_1578914921.png', 'Others', 1795, 'Active', '2020-01-13 05:28:41', '2020-01-13 05:28:41'),
(184, 'Sattar Metal', 'Dual Piller Cock', '78659', 'p_1578914979.png', 'Others', 1590, 'Active', '2020-01-13 05:29:39', '2020-01-13 05:29:39'),
(185, 'Sattar Metal', 'Soap Dispenser Single Line', '786204', 'p_1578915101.png', 'Others', 890, 'Active', '2020-01-13 05:31:41', '2020-01-13 05:31:41'),
(186, 'Sattar Metal', 'Soap Dispenser Double Line', '786203', 'p_1578915153.png', 'Others', 1290, 'Active', '2020-01-13 05:32:33', '2020-01-13 05:32:33'),
(187, 'Sattar Metal', 'Hand Dryer', '786200', 'p_1578915195.png', 'Others', 7960, 'Active', '2020-01-13 05:33:15', '2020-01-13 05:33:15'),
(188, 'Sattar Metal', 'Auto Perfume Dispenser Double', '786201', 'p_1578915254.png', 'Others', 1660, 'Active', '2020-01-13 05:34:14', '2020-01-13 05:34:14'),
(189, 'Sattar Metal', 'Auto Sensor Soap Dispenser   -   Jupiter', '786205', 'p_1578915315.png', 'Others', 3890, 'Active', '2020-01-13 05:35:15', '2020-01-13 05:35:15'),
(190, 'Sattar Metal', 'Auto Sensor Soap Dispenser   -   Mars', '786206', 'p_1578915376.png', 'Others', 1690, 'Active', '2020-01-13 05:36:16', '2020-01-13 05:36:16'),
(191, 'Sattar Metal', 'Auto Sensor Soap Dispenser   -   Venus', '786207', 'p_1578915427.png', 'Others', 1890, 'Active', '2020-01-13 05:37:07', '2020-01-13 05:37:07'),
(192, 'Sattar Metal', 'Auto Perfume Dispenser Single', '786202', 'p_1578915469.png', 'Others', 890, 'Active', '2020-01-13 05:37:49', '2020-01-13 05:37:49'),
(193, 'Sattar Metal', 'Hand Dryer   -    Venus', '786209', 'p_1578915505.png', 'Others', 3390, 'Active', '2020-01-13 05:38:25', '2020-01-13 05:40:10'),
(194, 'Sattar Metal', 'Hand Dryer   -   Mars', '786208', 'p_1578915548.png', 'Others', 3390, 'Active', '2020-01-13 05:39:08', '2020-01-13 05:39:08'),
(195, 'Sattar Metal', 'Soap Corner (Double)', '0049', 'p_1578915596.png', 'Others', 3395, 'Active', '2020-01-13 05:39:56', '2020-01-13 05:39:56'),
(196, 'Sattar Metal', 'Soap Corner', '0048', 'p_1578915650.png', 'Others', 1695, 'Active', '2020-01-13 05:40:50', '2020-01-13 05:40:50'),
(197, 'Sattar Metal', 'Soap Corner (Single)', '0039', 'p_1578916478.png', 'Others', 1190, 'Active', '2020-01-13 05:54:38', '2020-01-13 05:54:38'),
(198, 'Sattar Metal', 'Double Soap Case (Plain)', '78674', 'p_1578916643.png', 'Others', 935, 'Active', '2020-01-13 05:57:23', '2020-01-13 05:57:23'),
(199, 'Sattar Metal', 'Bib Cock Lucid', 'PP-001', 'p_1578916685.png', 'Others', 128, 'Active', '2020-01-13 05:58:05', '2020-01-13 05:58:05'),
(200, 'Sattar Metal', 'Bib Cock Cav', 'PP-002', 'p_1578916758.png', 'Others', 128, 'Active', '2020-01-13 05:59:18', '2020-01-13 05:59:18'),
(201, 'Sattar Metal', 'Paper Holder (Standard)', '0043', 'p_1578916848.png', 'Others', 690, 'Active', '2020-01-13 06:00:48', '2020-01-13 06:00:48'),
(202, 'Sattar Metal', 'Soap Case (S.S.)', '0050', 'p_1578916933.png', 'Others', 360, 'Active', '2020-01-13 06:02:13', '2020-01-13 06:02:35'),
(203, 'Sattar Metal', 'Super Basin Waist', '0034', 'p_1578916997.png', 'Others', 360, 'Active', '2020-01-13 06:03:17', '2020-01-13 06:03:17'),
(204, 'Sattar Metal', 'Basin Waist', '0036', 'p_1578917039.png', 'Others', 360, 'Active', '2020-01-13 06:03:59', '2020-01-13 06:03:59'),
(205, 'Sattar Metal', 'Conceal Towel Rail S S Pipe 24\'', '0035', 'p_1578917115.png', 'Others', 565, 'Active', '2020-01-13 06:05:15', '2020-01-13 06:05:15'),
(206, 'Sattar Metal', 'Conceal Towel Rail S S Pipe 18\'', '0037', 'p_1578917161.png', 'Others', 555, 'Active', '2020-01-13 06:06:01', '2020-01-13 06:06:01'),
(207, 'Sattar Metal', 'Double Towel Bar', '78661', 'p_1578917197.png', 'Others', 2990, 'Active', '2020-01-13 06:06:37', '2020-01-13 06:06:37'),
(208, 'Sattar Metal', 'Single Towel Bar', '78662', 'p_1578917233.png', 'Others', 1990, 'Active', '2020-01-13 06:07:13', '2020-01-13 06:07:13'),
(209, 'Sattar Metal', 'Connection Pipe (Super) 36\'', '78675', 'p_1578917301.png', 'Others', 135, 'Active', '2020-01-13 06:08:21', '2020-01-13 06:08:21'),
(210, 'Sattar Metal', 'Conceal Paper Holder (S S)', '0046', 'p_1578917355.png', 'Others', 590, 'Active', '2020-01-13 06:09:15', '2020-01-13 06:09:15'),
(211, 'Sattar Metal', 'Royel Coat Hook', '0044', 'p_1578917400.png', 'Others', 690, 'Active', '2020-01-13 06:10:00', '2020-01-13 06:10:00'),
(212, 'Sattar Metal', 'Soap Case (S S) Plain', '0041', 'p_1578917441.png', 'Others', 695, 'Active', '2020-01-13 06:10:41', '2020-01-13 06:10:41'),
(213, 'Sattar Metal', '24\' Brash Towel Rail', '78631', 'p_1578917493.png', 'Others', 765, 'Active', '2020-01-13 06:11:33', '2020-01-13 06:11:33'),
(214, 'Sattar Metal', '18\' Brash Towel Rail', '78632', 'p_1578917537.png', 'Others', 735, 'Active', '2020-01-13 06:12:17', '2020-01-13 06:12:17'),
(215, 'Sattar Metal', '5\' Grating Net Jali', '0073', 'p_1578917660.png', 'Others', 110, 'Active', '2020-01-13 06:14:20', '2020-01-13 06:14:20'),
(216, 'Sattar Metal', '4\' Grating Net Jali', '0075', 'p_1578917695.png', 'Others', 95, 'Active', '2020-01-13 06:14:55', '2020-01-13 06:14:55'),
(217, 'Sattar Metal', '3\' Grating Net  Jali', '0074', 'p_1578917730.png', 'Others', 85, 'Active', '2020-01-13 06:15:30', '2020-01-13 06:15:30'),
(218, 'Sattar Metal', '2\' Grating Net Jali', '0076', '1579343736.jpg', 'Others', 75, 'active', '2020-01-13 06:15:54', '2020-01-18 04:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_wise_sales`
--

CREATE TABLE `product_wise_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_wise_sales`
--

INSERT INTO `product_wise_sales` (`id`, `product_code`, `product_name`, `category`, `price`, `pieces`, `created_at`, `updated_at`) VALUES
(1, '002', 'Bath Tub Mixer Royal With Hand Shower', 'Coaster+A Head', '50', '20', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(2, '002', 'Bath Tub Mixer Royal With Hand Shower', 'Essco Head', '50', '20', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(3, '002', 'Bath Tub Mixer Royal With Hand Shower', 'Star Head', '50', '13', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(4, '006', 'Fixed Basin Mixer (Heavy)', 'Coaster+A Head', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(5, '78644', 'Single Lever Conceal Super Spout Mixer 3/4\'', 'Single Lever', '50', '15', '2020-02-12 23:08:33', '2020-03-02 01:30:59'),
(6, '0052', 'Piller Cock (Pony)', 'Others', '50', '15', '2020-02-12 23:08:34', '2020-03-02 01:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approved_sale_id` int(11) NOT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `challan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`id`, `approved_sale_id`, `em_id`, `em_name`, `em_email`, `position`, `challan_no`, `number`, `code`, `organization_name`, `address`, `date`, `mobile_number`, `p_o_number`, `project`, `product_code`, `product_name`, `category`, `pieces`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'rijwan', 'rijwan@gmail.com', 'Dealer', '123456789', '123456', '123456', NULL, 'test', 'test', '123456789', '1234567', '986', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '2020-02-20 04:45:41', '2020-02-20 04:45:41'),
(2, 1, 1, 'rijwan', 'rijwan@gmail.com', 'Dealer', '123456789', '123456', '123456', 'test', 'test', 'test', '123456789', '1234567', '986', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '2020-02-20 04:46:22', '2020-02-20 04:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(10, 'super_admin', 'super_admin', '2020-02-08 02:56:36', '2020-02-08 02:56:36'),
(12, 'No Role', 'nothing', '2020-02-08 06:11:45', '2020-02-08 06:11:45'),
(13, 'super admin', 'super_admin', '2020-02-11 02:52:07', '2020-02-11 02:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(28, 1, 10, NULL, NULL),
(29, 33, 10, NULL, NULL),
(31, 35, 12, NULL, NULL),
(32, 36, 12, NULL, NULL),
(33, 34, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `em_id` int(11) DEFAULT NULL,
  `em_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `price` longtext COLLATE utf8mb4_unicode_ci,
  `pieces` longtext COLLATE utf8mb4_unicode_ci,
  `total_price` longtext COLLATE utf8mb4_unicode_ci,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_writing_store` longtext COLLATE utf8mb4_unicode_ci,
  `permission` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `em_id`, `em_name`, `em_email`, `position`, `number`, `code`, `organization_name`, `address`, `date`, `mobile_number`, `p_o_number`, `project`, `brand_name`, `product_code`, `product_name`, `category`, `price`, `pieces`, `total_price`, `total_amount`, `commission`, `current_amount`, `old_outstanding`, `total_outstanding`, `amount_writing_store`, `permission`, `created_at`, `updated_at`) VALUES
(1, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', 1, '2020-02-12 22:14:49', '2020-02-12 22:25:57'),
(2, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', NULL, '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', 1, '2020-02-13 00:08:13', '2020-02-13 00:08:38'),
(3, 36, 'sattar metal', 'sattar_metal@gmail.com', 'Sr.Manager', '1234562589', '12345', 'setcolbd', 'polton', '2019-12-10', '01986348224', '007', '986', 'Sattar Metal', '[\"002\",\"002\",\"002\",\"006\",\"78644\",\"0052\"]', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Fixed Basin Mixer (Heavy)\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Piller Cock (Pony)\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Single Lever\",\"Others\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '[\"5\",\"5\",\"4\",\"5\",\"5\",\"5\"]', '[\"50\",\"50\",\"50\",\"50\",\"50\",\"50\"]', '22300', '5', '20962', '5000', '25962', 'twenty two  thousand three hundred', 1, '2020-02-27 03:51:09', '2020-03-02 01:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` longtext COLLATE utf8mb4_unicode_ci,
  `product_code` longtext COLLATE utf8mb4_unicode_ci,
  `category` longtext COLLATE utf8mb4_unicode_ci,
  `stock_measurement` longtext COLLATE utf8mb4_unicode_ci,
  `store_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `brand_name`, `product_name`, `product_code`, `category`, `stock_measurement`, `store_date`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Sattar', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Special Fixed Basin Mixer\",\"Special Fixed Basin Mixer\",\"Special Fixed Basin Mixer\",\"Fixed Basin Mixer (Heavy)\",\"Fixed Basin Mixer (Heavy)\",\"Fixed Basin Mixer (Heavy)\",\"Full Moving Basin Mixer\",\"Full Moving Basin Mixer\",\"Full Moving Basin Mixer\",\"Long Piller Cock\",\"Long Piller Cock\",\"Long Piller Cock\",\"Moving Piller Cock\",\"Moving Piller Cock\",\"Moving Piller Cock\",\"Sink Mixer\",\"Sink Mixer\",\"Sink Mixer\",\"Moving Sink Cock\",\"Moving Sink Cock\",\"Moving Sink Cock\",\"Sink Bib Cock\",\"Sink Bib Cock\",\"Sink Bib Cock\",\"Full Moving Basin Fexible\",\"Full Moving Basin Fexible\",\"Full Moving Basin Fexible\",\"Sink Mixer Fexible\",\"Sink Mixer Fexible\",\"Sink Mixer Fexible\",\"Moving Piller Cock Fexible\",\"Moving Piller Cock Fexible\",\"Moving Piller Cock Fexible\",\"Moving Sink Cock Fexible\",\"Moving Sink Cock Fexible\",\"Moving Sink Cock Fexible\",\"1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\' Conceal Stop Cock (Heavy)\",\"1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\' Conceal Stop Cock (Heavy)\",\"1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\' Conceal Stop Cock (Heavy)\",\"3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\' Conceal Stop Cock (Heavy)\",\"3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\' Conceal Stop Cock (Heavy)\",\"3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\' Conceal Stop Cock (Heavy)\",\"1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\' Conceal Stop Cock (Premium)\",\"1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\' Conceal Stop Cock (Premium)\",\"1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\' Conceal Stop Cock (Premium)\",\"3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\' Conceal Stop Cock (Premium)\",\"3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\' Conceal Stop Cock (Premium)\",\"3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"Angle Stop Cock\",\"Angle Stop Cock\",\"Angle Stop Cock\",\"Two In One Bib Cock\",\"Two In One Bib Cock\",\"Two In One Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock (Without Filter)\",\"Conceal Bib Cock (Without Filter)\",\"Conceal Bib Cock (Without Filter)\",\"Single Lever Bath Tub Mixer With Hand Shower\",\"Single Lever Bath Tub Mixer With Hand Shower (Orbed)\",\"Single Lever Bath Tub Mixer With Hand Shower (Pony)\",\"Single Lever Conceal Shower Mixer Set 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Single Lever Conceal Shower Mixer Set Super 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Single Lever Conceal Spout Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Single Lever Conceal Super Spout Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Single Lever Conceal Shower Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Single Lever Conceal Shower Mixer Set 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Single Lever Conceal Shower Mixer Set Super 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Single Lever Conceal Spout Mixer 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Single Lever Conceal Super Spout Mixer 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Single Lever Conceal Shower Mixer 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Square Conceal Shower Mixer Set 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Square Conceal Spout Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Square Conceal Shower Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Square Conceal Shower Mixer Set (Super) 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Square Conceal Super Spout Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Square Conceal Shower Mixer Set 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Square Conceal Spout Mixer 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Square Conceal Shower Mixer 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Square Conceal Shower Mixer Set (Super) 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Square Conceal Super Spout Mixer 3\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/4\'\",\"Elite Conceal Shower Mixer Set 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Shower Spout Mixer Set 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Shower Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Super Shower Mixer Set 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Super Spout Mixer 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Shower Mixer Set (Square) 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Shower Spout Mixer(Sqaure) 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Shower Mixer (Sqaure) 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Super Shower Mixer Set(Square) 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Elite Conceal Super Spout Mixer (Square) 1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\/2\'\",\"Single Lever Conceal Shower Mixer Set (3 Lines)\",\"Single Lever Basin Mixer (Heavy)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Orbed)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Basin Mixer (Crystal)\",\"Single Lever Piller Cock (Round)\",\"Single Lever Basin Mixer (Special)\",\"Single Lever Basin Mixer (Square)\",\"Single Lever Basin Mixer (Royal)\",\"Single Lever Basin Mixer (Mars)\",\"Single Lever Basin Mixer (Orbed)\",\"Single Lever Basin Mixer (Pony)\",\"Sensor Automatic Piller Cock (Venus)\",\"Sensor Automatic Piller Cock (Neptune)\",\"Sensor Automatic Piller Cock (Jupiter)\",\"Sensor Automatic Piller Cock (Mars)\",\"Star Moving Shower\",\"Moving Shower Super\",\"Moving Shower(Orbed)\",\"Bib Cock (Orbed)\",\"Piller Cock (Orbed)\",\"Piller Cock (Pony)\",\"Basin Mixer (Orbed)\",\"Conceal Stop Cock (Orbed)\",\"Angle Stop Cock (Orbed)\",\"Angle Stop Cock (Smart)\",\"Connection Pipe (Super) 24\'\",\"Dining Towel Bar\",\"Pillar Cock (Super)\",\"Pillar Cock (Smart)\",\"Bib Cock (Smart)\",\"Bib Cock (Sqaure)\",\"Two   -   In   -   One (Smart)\",\"Two  -  In  -  One (Square)\",\"Super Hand Shower\",\"Two  -  In  -  One (Super)\",\"Bib Cock (Super)\",\"Sink Bib Cock (Super)\",\"Sink Bib Cock (Smart)\",\"Pillar Cock (Push)\",\"Bib Cock (Push)\",\"Single Lever Bathtub Mixer (Smart)\",\"Single Lever Basin Mixer (Super)\",\"Single Lever Basin Mixer (Smart)\",\"Single Lever Sink Mixer (Smart)\",\"Soap Case (Premium)\",\"Soap Case (Royel)\",\"Soap Case (Imperial)\",\"Square Towel Rail\",\"Cloth Hanger\",\"4\' Grating Box Jali\",\"4\' Floor Drain  -  Jupiter\",\"4\' Floor Drain  -  Mars\",\"4\' Floor Drain  -  Venus\",\"Push Shower\",\"Push Shower Royel\",\"Push Shower Premium\",\"F B Push Shower\",\"Orbed Push Shower\",\"Long Push Shower\",\"Orbed Hand Shower\",\"Round Hand Shower\",\"Hand Shower (Mars)\",\"Hand Shower\",\"Hand Shower\",\"Hand Shower Chain\",\"Urinal Angle Stop Cock Set\",\"Tulip Ceiling Shower (Shower Only)\",\"Tulip Ceiling Shower With Pipe\",\"Square Ceiling Shower (Onlybshower)\",\"Square Ceiling Shower With Pipe\",\"Round Ceiling Shower (Only Shower)\",\"Round Ceiling Shower With Pipe\",\"Orbed Ceiling Shower (Only Shower)\",\"Orbed Ceiling Shower With Pipe\",\"Multipurpose Towel Shelf\",\"Multipurpose Towel Shelf (Premium)\",\"Double Soap Case (Crown)\",\"Dual Piller Cock Fexible\",\"Dual Pillar Cock (Mars)\",\"Dual Piller Cock\",\"Soap Dispenser Single Line\",\"Soap Dispenser Double Line\",\"Hand Dryer\",\"Auto Perfume Dispenser Double\",\"Auto Sensor Soap Dispenser   -   Jupiter\",\"Auto Sensor Soap Dispenser   -   Mars\",\"Auto Sensor Soap Dispenser   -   Venus\",\"Auto Perfume Dispenser Single\",\"Hand Dryer   -    Venus\",\"Hand Dryer   -   Mars\",\"Soap Corner (Double)\",\"Soap Corner\",\"Soap Corner (Single)\",\"Double Soap Case (Plain)\",\"Bib Cock Lucid\",\"Bib Cock Cav\",\"Paper Holder (Standard)\",\"Soap Case (S.S.)\",\"Super Basin Waist\",\"Basin Waist\",\"Conceal Towel Rail S S Pipe 24\'\",\"Conceal Towel Rail S S Pipe 18\'\",\"Double Towel Bar\",\"Single Towel Bar\",\"Connection Pipe (Super) 36\'\",\"Conceal Paper Holder (S S)\",\"Royel Coat Hook\",\"Soap Case (S S) Plain\",\"24\' Brash Towel Rail\",\"18\' Brash Towel Rail\",\"5\' Grating Net Jali\",\"4\' Grating Net Jali\",\"3\' Grating Net  Jali\",\"2\' Grating Net Jali\"]', '[\"002\",\"002\",\"002\",\"004\",\"004\",\"004\",\"006\",\"006\",\"006\",\"008\",\"008\",\"008\",\"0017\",\"0017\",\"0017\",\"0018\",\"0018\",\"0018\",\"0010\",\"0010\",\"0010\",\"0013\",\"0013\",\"0013\",\"0026\",\"0026\",\"0026\",\"101\",\"101\",\"101\",\"102\",\"102\",\"102\",\"103\",\"103\",\"103\",\"104\",\"104\",\"104\",\"0019\",\"0019\",\"0019\",\"0020\",\"0020\",\"0020\",\"105\",\"105\",\"105\",\"106\",\"106\",\"106\",\"107\",\"107\",\"107\",\"0024\",\"0024\",\"0024\",\"0025\",\"0025\",\"0025\",\"0027\",\"0027\",\"0027\",\"0028\",\"0028\",\"0028\",\"78601\",\"78615\",\"78614\",\"78602\",\"78641\",\"78604\",\"78643\",\"78608\",\"78611\",\"78642\",\"78612\",\"78644\",\"78613\",\"786215\",\"786217\",\"786219\",\"786221\",\"786223\",\"786216\",\"786218\",\"786220\",\"786222\",\"786224\",\"786227\",\"786229\",\"786231\",\"786233\",\"786235\",\"786228\",\"786230\",\"786232\",\"786234\",\"786236\",\"78670\",\"78603\",\"78606\",\"78606P\",\"78606AA\",\"78616\",\"78616P\",\"78616AA\",\"78640\",\"78620\",\"78607\",\"78684\",\"78624\",\"78683\",\"78681\",\"78682\",\"78101\",\"786102\",\"786103\",\"786104\",\"0031\",\"0033\",\"0032\",\"0051\",\"0053\",\"0052\",\"005\",\"108\",\"78680\",\"78629\",\"78630\",\"78663\",\"78633\",\"78634\",\"78635\",\"78636\",\"78637\",\"78638\",\"78656\",\"78647\",\"78648\",\"78649\",\"78653\",\"78652\",\"78651\",\"SP-5001\",\"SP-5002\",\"SP-5003\",\"SP-5004\",\"786113\",\"786114\",\"786126\",\"786117\",\"0045\",\"786123\",\"786212\",\"786210\",\"786211\",\"PU-777\",\"PU-777R\",\"PU-888\",\"FB-121\",\"PU-555\",\"PU-666\",\"HS-444\",\"HS-333\",\"HS-222\",\"HS-121\",\"HS-999\",\"HC-4848\",\"78667\",\"78657\",\"78658\",\"78665\",\"78666\",\"78668\",\"78669\",\"78671\",\"78672\",\"78664\",\"786213\",\"78673\",\"786214\",\"786225\",\"78659\",\"786204\",\"786203\",\"786200\",\"786201\",\"786205\",\"786206\",\"786207\",\"786202\",\"786209\",\"786208\",\"0049\",\"0048\",\"0039\",\"78674\",\"PP-001\",\"PP-002\",\"0043\",\"0050\",\"0034\",\"0036\",\"0035\",\"0037\",\"78661\",\"78662\",\"78675\",\"0046\",\"0044\",\"0041\",\"78631\",\"78632\",\"0073\",\"0075\",\"0074\",\"0076\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Others\",\"Single Lever\",\"Single Lever\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\"]', '[\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\",\"5000\"]', '2020-01-20', '1360057618', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(5, 'Sattar', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Special Fixed Basin Mixer\",\"Special Fixed Basin Mixer\",\"Special Fixed Basin Mixer\",\"Fixed Basin Mixer (Heavy)\",\"Fixed Basin Mixer (Heavy)\",\"Fixed Basin Mixer (Heavy)\",\"Full Moving Basin Mixer\",\"Full Moving Basin Mixer\",\"Full Moving Basin Mixer\",\"Long Piller Cock\",\"Long Piller Cock\",\"Long Piller Cock\",\"Moving Piller Cock\",\"Moving Piller Cock\",\"Moving Piller Cock\",\"Sink Mixer\",\"Sink Mixer\",\"Sink Mixer\",\"Moving Sink Cock\",\"Moving Sink Cock\",\"Moving Sink Cock\",\"Sink Bib Cock\",\"Sink Bib Cock\",\"Sink Bib Cock\",\"Full Moving Basin Fexible\",\"Full Moving Basin Fexible\",\"Full Moving Basin Fexible\",\"Sink Mixer Fexible\",\"Sink Mixer Fexible\",\"Sink Mixer Fexible\",\"Moving Piller Cock Fexible\",\"Moving Piller Cock Fexible\",\"Moving Piller Cock Fexible\",\"Moving Sink Cock Fexible\",\"Moving Sink Cock Fexible\",\"Moving Sink Cock Fexible\",\"1\\/2\' Conceal Stop Cock (Heavy)\",\"1\\/2\' Conceal Stop Cock (Heavy)\",\"1\\/2\' Conceal Stop Cock (Heavy)\",\"3\\/4\' Conceal Stop Cock (Heavy)\",\"3\\/4\' Conceal Stop Cock (Heavy)\",\"3\\/4\' Conceal Stop Cock (Heavy)\",\"1\\/2\' Conceal Stop Cock (Premium)\",\"1\\/2\' Conceal Stop Cock (Premium)\",\"1\\/2\' Conceal Stop Cock (Premium)\",\"3\\/4\' Conceal Stop Cock (Premium)\",\"3\\/4\' Conceal Stop Cock (Premium)\",\"3\\/4\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"Angle Stop Cock\",\"Angle Stop Cock\",\"Angle Stop Cock\",\"Two In One Bib Cock\",\"Two In One Bib Cock\",\"Two In One Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock (Without Filter)\",\"Conceal Bib Cock (Without Filter)\",\"Conceal Bib Cock (Without Filter)\",\"Single Lever Bath Tub Mixer With Hand Shower\",\"Single Lever Bath Tub Mixer With Hand Shower (Orbed)\",\"Single Lever Bath Tub Mixer With Hand Shower (Pony)\",\"Single Lever Conceal Shower Mixer Set 1\\/2\'\",\"Single Lever Conceal Shower Mixer Set Super 1\\/2\'\",\"Single Lever Conceal Spout Mixer 1\\/2\'\",\"Single Lever Conceal Super Spout Mixer 1\\/2\'\",\"Single Lever Conceal Shower Mixer 1\\/2\'\",\"Single Lever Conceal Shower Mixer Set 3\\/4\'\",\"Single Lever Conceal Shower Mixer Set Super 3\\/4\'\",\"Single Lever Conceal Spout Mixer 3\\/4\'\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Single Lever Conceal Shower Mixer 3\\/4\'\",\"Square Conceal Shower Mixer Set 1\\/2\'\",\"Square Conceal Spout Mixer 1\\/2\'\",\"Square Conceal Shower Mixer 1\\/2\'\",\"Square Conceal Shower Mixer Set (Super) 1\\/2\'\",\"Square Conceal Super Spout Mixer 1\\/2\'\",\"Square Conceal Shower Mixer Set 3\\/4\'\",\"Square Conceal Spout Mixer 3\\/4\'\",\"Square Conceal Shower Mixer 3\\/4\'\",\"Square Conceal Shower Mixer Set (Super) 3\\/4\'\",\"Square Conceal Super Spout Mixer 3\\/4\'\",\"Elite Conceal Shower Mixer Set 1\\/2\'\",\"Elite Conceal Shower Spout Mixer Set 1\\/2\'\",\"Elite Conceal Shower Mixer 1\\/2\'\",\"Elite Conceal Super Shower Mixer Set 1\\/2\'\",\"Elite Conceal Super Spout Mixer 1\\/2\'\",\"Elite Conceal Shower Mixer Set (Square) 1\\/2\'\",\"Elite Conceal Shower Spout Mixer(Sqaure) 1\\/2\'\",\"Elite Conceal Shower Mixer (Sqaure) 1\\/2\'\",\"Elite Conceal Super Shower Mixer Set(Square) 1\\/2\'\",\"Elite Conceal Super Spout Mixer (Square) 1\\/2\'\",\"Single Lever Conceal Shower Mixer Set (3 Lines)\",\"Single Lever Basin Mixer (Heavy)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Orbed)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Basin Mixer (Crystal)\",\"Single Lever Piller Cock (Round)\",\"Single Lever Basin Mixer (Special)\",\"Single Lever Basin Mixer (Square)\",\"Single Lever Basin Mixer (Royal)\",\"Single Lever Basin Mixer (Mars)\",\"Single Lever Basin Mixer (Orbed)\",\"Single Lever Basin Mixer (Pony)\",\"Sensor Automatic Piller Cock (Venus)\",\"Sensor Automatic Piller Cock (Neptune)\",\"Sensor Automatic Piller Cock (Jupiter)\",\"Sensor Automatic Piller Cock (Mars)\",\"Star Moving Shower\",\"Moving Shower Super\",\"Moving Shower(Orbed)\",\"Bib Cock (Orbed)\",\"Piller Cock (Orbed)\",\"Piller Cock (Pony)\",\"Basin Mixer (Orbed)\",\"Conceal Stop Cock (Orbed)\",\"Angle Stop Cock (Orbed)\",\"Angle Stop Cock (Smart)\",\"Connection Pipe (Super) 24\'\",\"Dining Towel Bar\",\"Pillar Cock (Super)\",\"Pillar Cock (Smart)\",\"Bib Cock (Smart)\",\"Bib Cock (Sqaure)\",\"Two   -   In   -   One (Smart)\",\"Two  -  In  -  One (Square)\",\"Super Hand Shower\",\"Two  -  In  -  One (Super)\",\"Bib Cock (Super)\",\"Sink Bib Cock (Super)\",\"Sink Bib Cock (Smart)\",\"Pillar Cock (Push)\",\"Bib Cock (Push)\",\"Single Lever Bathtub Mixer (Smart)\",\"Single Lever Basin Mixer (Super)\",\"Single Lever Basin Mixer (Smart)\",\"Single Lever Sink Mixer (Smart)\",\"Soap Case (Premium)\",\"Soap Case (Royel)\",\"Soap Case (Imperial)\",\"Square Towel Rail\",\"Cloth Hanger\",\"4\' Grating Box Jali\",\"4\' Floor Drain  -  Jupiter\",\"4\' Floor Drain  -  Mars\",\"4\' Floor Drain  -  Venus\",\"Push Shower\",\"Push Shower Royel\",\"Push Shower Premium\",\"F B Push Shower\",\"Orbed Push Shower\",\"Long Push Shower\",\"Orbed Hand Shower\",\"Round Hand Shower\",\"Hand Shower (Mars)\",\"Hand Shower\",\"Hand Shower\",\"Hand Shower Chain\",\"Urinal Angle Stop Cock Set\",\"Tulip Ceiling Shower (Shower Only)\",\"Tulip Ceiling Shower With Pipe\",\"Square Ceiling Shower (Onlybshower)\",\"Square Ceiling Shower With Pipe\",\"Round Ceiling Shower (Only Shower)\",\"Round Ceiling Shower With Pipe\",\"Orbed Ceiling Shower (Only Shower)\",\"Orbed Ceiling Shower With Pipe\",\"Multipurpose Towel Shelf\",\"Multipurpose Towel Shelf (Premium)\",\"Double Soap Case (Crown)\",\"Dual Piller Cock Fexible\",\"Dual Pillar Cock (Mars)\",\"Dual Piller Cock\",\"Soap Dispenser Single Line\",\"Soap Dispenser Double Line\",\"Hand Dryer\",\"Auto Perfume Dispenser Double\",\"Auto Sensor Soap Dispenser   -   Jupiter\",\"Auto Sensor Soap Dispenser   -   Mars\",\"Auto Sensor Soap Dispenser   -   Venus\",\"Auto Perfume Dispenser Single\",\"Hand Dryer   -    Venus\",\"Hand Dryer   -   Mars\",\"Soap Corner (Double)\",\"Soap Corner\",\"Soap Corner (Single)\",\"Double Soap Case (Plain)\",\"Bib Cock Lucid\",\"Bib Cock Cav\",\"Paper Holder (Standard)\",\"Soap Case (S.S.)\",\"Super Basin Waist\",\"Basin Waist\",\"Conceal Towel Rail S S Pipe 24\'\",\"Conceal Towel Rail S S Pipe 18\'\",\"Double Towel Bar\",\"Single Towel Bar\",\"Connection Pipe (Super) 36\'\",\"Conceal Paper Holder (S S)\",\"Royel Coat Hook\",\"Soap Case (S S) Plain\",\"24\' Brash Towel Rail\",\"18\' Brash Towel Rail\",\"5\' Grating Net Jali\",\"4\' Grating Net Jali\",\"3\' Grating Net  Jali\",\"2\' Grating Net Jali\"]', '[\"002\",\"002\",\"002\",\"004\",\"004\",\"004\",\"006\",\"006\",\"006\",\"008\",\"008\",\"008\",\"0017\",\"0017\",\"0017\",\"0018\",\"0018\",\"0018\",\"0010\",\"0010\",\"0010\",\"0013\",\"0013\",\"0013\",\"0026\",\"0026\",\"0026\",\"101\",\"101\",\"101\",\"102\",\"102\",\"102\",\"103\",\"103\",\"103\",\"104\",\"104\",\"104\",\"0019\",\"0019\",\"0019\",\"0020\",\"0020\",\"0020\",\"105\",\"105\",\"105\",\"106\",\"106\",\"106\",\"107\",\"107\",\"107\",\"0024\",\"0024\",\"0024\",\"0025\",\"0025\",\"0025\",\"0027\",\"0027\",\"0027\",\"0028\",\"0028\",\"0028\",\"78601\",\"78615\",\"78614\",\"78602\",\"78641\",\"78604\",\"78643\",\"78608\",\"78611\",\"78642\",\"78612\",\"78644\",\"78613\",\"786215\",\"786217\",\"786219\",\"786221\",\"786223\",\"786216\",\"786218\",\"786220\",\"786222\",\"786224\",\"786227\",\"786229\",\"786231\",\"786233\",\"786235\",\"786228\",\"786230\",\"786232\",\"786234\",\"786236\",\"78670\",\"78603\",\"78606\",\"78606P\",\"78606AA\",\"78616\",\"78616P\",\"78616AA\",\"78640\",\"78620\",\"78607\",\"78684\",\"78624\",\"78683\",\"78681\",\"78682\",\"78101\",\"786102\",\"786103\",\"786104\",\"0031\",\"0033\",\"0032\",\"0051\",\"0053\",\"0052\",\"005\",\"108\",\"78680\",\"78629\",\"78630\",\"78663\",\"78633\",\"78634\",\"78635\",\"78636\",\"78637\",\"78638\",\"78656\",\"78647\",\"78648\",\"78649\",\"78653\",\"78652\",\"78651\",\"SP-5001\",\"SP-5002\",\"SP-5003\",\"SP-5004\",\"786113\",\"786114\",\"786126\",\"786117\",\"0045\",\"786123\",\"786212\",\"786210\",\"786211\",\"PU-777\",\"PU-777R\",\"PU-888\",\"FB-121\",\"PU-555\",\"PU-666\",\"HS-444\",\"HS-333\",\"HS-222\",\"HS-121\",\"HS-999\",\"HC-4848\",\"78667\",\"78657\",\"78658\",\"78665\",\"78666\",\"78668\",\"78669\",\"78671\",\"78672\",\"78664\",\"786213\",\"78673\",\"786214\",\"786225\",\"78659\",\"786204\",\"786203\",\"786200\",\"786201\",\"786205\",\"786206\",\"786207\",\"786202\",\"786209\",\"786208\",\"0049\",\"0048\",\"0039\",\"78674\",\"PP-001\",\"PP-002\",\"0043\",\"0050\",\"0034\",\"0036\",\"0035\",\"0037\",\"78661\",\"78662\",\"78675\",\"0046\",\"0044\",\"0041\",\"78631\",\"78632\",\"0073\",\"0075\",\"0074\",\"0076\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Others\",\"Single Lever\",\"Single Lever\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\"]', '[\"500\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\"]', '2020-02-11', '135285865', '2020-02-11 01:13:25', '2020-02-11 01:13:25');
INSERT INTO `stocks` (`id`, `brand_name`, `product_name`, `product_code`, `category`, `stock_measurement`, `store_date`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Sattar', '[\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Bath Tub Mixer Royal With Hand Shower\",\"Special Fixed Basin Mixer\",\"Special Fixed Basin Mixer\",\"Special Fixed Basin Mixer\",\"Fixed Basin Mixer (Heavy)\",\"Fixed Basin Mixer (Heavy)\",\"Fixed Basin Mixer (Heavy)\",\"Full Moving Basin Mixer\",\"Full Moving Basin Mixer\",\"Full Moving Basin Mixer\",\"Long Piller Cock\",\"Long Piller Cock\",\"Long Piller Cock\",\"Moving Piller Cock\",\"Moving Piller Cock\",\"Moving Piller Cock\",\"Sink Mixer\",\"Sink Mixer\",\"Sink Mixer\",\"Moving Sink Cock\",\"Moving Sink Cock\",\"Moving Sink Cock\",\"Sink Bib Cock\",\"Sink Bib Cock\",\"Sink Bib Cock\",\"Full Moving Basin Fexible\",\"Full Moving Basin Fexible\",\"Full Moving Basin Fexible\",\"Sink Mixer Fexible\",\"Sink Mixer Fexible\",\"Sink Mixer Fexible\",\"Moving Piller Cock Fexible\",\"Moving Piller Cock Fexible\",\"Moving Piller Cock Fexible\",\"Moving Sink Cock Fexible\",\"Moving Sink Cock Fexible\",\"Moving Sink Cock Fexible\",\"1\\/2\' Conceal Stop Cock (Heavy)\",\"1\\/2\' Conceal Stop Cock (Heavy)\",\"1\\/2\' Conceal Stop Cock (Heavy)\",\"3\\/4\' Conceal Stop Cock (Heavy)\",\"3\\/4\' Conceal Stop Cock (Heavy)\",\"3\\/4\' Conceal Stop Cock (Heavy)\",\"1\\/2\' Conceal Stop Cock (Premium)\",\"1\\/2\' Conceal Stop Cock (Premium)\",\"1\\/2\' Conceal Stop Cock (Premium)\",\"3\\/4\' Conceal Stop Cock (Premium)\",\"3\\/4\' Conceal Stop Cock (Premium)\",\"3\\/4\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"1\' Conceal Stop Cock (Premium)\",\"Angle Stop Cock\",\"Angle Stop Cock\",\"Angle Stop Cock\",\"Two In One Bib Cock\",\"Two In One Bib Cock\",\"Two In One Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock\",\"Conceal Bib Cock (Without Filter)\",\"Conceal Bib Cock (Without Filter)\",\"Conceal Bib Cock (Without Filter)\",\"Single Lever Bath Tub Mixer With Hand Shower\",\"Single Lever Bath Tub Mixer With Hand Shower (Orbed)\",\"Single Lever Bath Tub Mixer With Hand Shower (Pony)\",\"Single Lever Conceal Shower Mixer Set 1\\/2\'\",\"Single Lever Conceal Shower Mixer Set Super 1\\/2\'\",\"Single Lever Conceal Spout Mixer 1\\/2\'\",\"Single Lever Conceal Super Spout Mixer 1\\/2\'\",\"Single Lever Conceal Shower Mixer 1\\/2\'\",\"Single Lever Conceal Shower Mixer Set 3\\/4\'\",\"Single Lever Conceal Shower Mixer Set Super 3\\/4\'\",\"Single Lever Conceal Spout Mixer 3\\/4\'\",\"Single Lever Conceal Super Spout Mixer 3\\/4\'\",\"Single Lever Conceal Shower Mixer 3\\/4\'\",\"Square Conceal Shower Mixer Set 1\\/2\'\",\"Square Conceal Spout Mixer 1\\/2\'\",\"Square Conceal Shower Mixer 1\\/2\'\",\"Square Conceal Shower Mixer Set (Super) 1\\/2\'\",\"Square Conceal Super Spout Mixer 1\\/2\'\",\"Square Conceal Shower Mixer Set 3\\/4\'\",\"Square Conceal Spout Mixer 3\\/4\'\",\"Square Conceal Shower Mixer 3\\/4\'\",\"Square Conceal Shower Mixer Set (Super) 3\\/4\'\",\"Square Conceal Super Spout Mixer 3\\/4\'\",\"Elite Conceal Shower Mixer Set 1\\/2\'\",\"Elite Conceal Shower Spout Mixer Set 1\\/2\'\",\"Elite Conceal Shower Mixer 1\\/2\'\",\"Elite Conceal Super Shower Mixer Set 1\\/2\'\",\"Elite Conceal Super Spout Mixer 1\\/2\'\",\"Elite Conceal Shower Mixer Set (Square) 1\\/2\'\",\"Elite Conceal Shower Spout Mixer(Sqaure) 1\\/2\'\",\"Elite Conceal Shower Mixer (Sqaure) 1\\/2\'\",\"Elite Conceal Super Shower Mixer Set(Square) 1\\/2\'\",\"Elite Conceal Super Spout Mixer (Square) 1\\/2\'\",\"Single Lever Conceal Shower Mixer Set (3 Lines)\",\"Single Lever Basin Mixer (Heavy)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Orbed)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Sink Mixer (Special)\",\"Single Lever Basin Mixer (Crystal)\",\"Single Lever Piller Cock (Round)\",\"Single Lever Basin Mixer (Special)\",\"Single Lever Basin Mixer (Square)\",\"Single Lever Basin Mixer (Royal)\",\"Single Lever Basin Mixer (Mars)\",\"Single Lever Basin Mixer (Orbed)\",\"Single Lever Basin Mixer (Pony)\",\"Sensor Automatic Piller Cock (Venus)\",\"Sensor Automatic Piller Cock (Neptune)\",\"Sensor Automatic Piller Cock (Jupiter)\",\"Sensor Automatic Piller Cock (Mars)\",\"Star Moving Shower\",\"Moving Shower Super\",\"Moving Shower(Orbed)\",\"Bib Cock (Orbed)\",\"Piller Cock (Orbed)\",\"Piller Cock (Pony)\",\"Basin Mixer (Orbed)\",\"Conceal Stop Cock (Orbed)\",\"Angle Stop Cock (Orbed)\",\"Angle Stop Cock (Smart)\",\"Connection Pipe (Super) 24\'\",\"Dining Towel Bar\",\"Pillar Cock (Super)\",\"Pillar Cock (Smart)\",\"Bib Cock (Smart)\",\"Bib Cock (Sqaure)\",\"Two   -   In   -   One (Smart)\",\"Two  -  In  -  One (Square)\",\"Super Hand Shower\",\"Two  -  In  -  One (Super)\",\"Bib Cock (Super)\",\"Sink Bib Cock (Super)\",\"Sink Bib Cock (Smart)\",\"Pillar Cock (Push)\",\"Bib Cock (Push)\",\"Single Lever Bathtub Mixer (Smart)\",\"Single Lever Basin Mixer (Super)\",\"Single Lever Basin Mixer (Smart)\",\"Single Lever Sink Mixer (Smart)\",\"Soap Case (Premium)\",\"Soap Case (Royel)\",\"Soap Case (Imperial)\",\"Square Towel Rail\",\"Cloth Hanger\",\"4\' Grating Box Jali\",\"4\' Floor Drain  -  Jupiter\",\"4\' Floor Drain  -  Mars\",\"4\' Floor Drain  -  Venus\",\"Push Shower\",\"Push Shower Royel\",\"Push Shower Premium\",\"F B Push Shower\",\"Orbed Push Shower\",\"Long Push Shower\",\"Orbed Hand Shower\",\"Round Hand Shower\",\"Hand Shower (Mars)\",\"Hand Shower\",\"Hand Shower\",\"Hand Shower Chain\",\"Urinal Angle Stop Cock Set\",\"Tulip Ceiling Shower (Shower Only)\",\"Tulip Ceiling Shower With Pipe\",\"Square Ceiling Shower (Onlybshower)\",\"Square Ceiling Shower With Pipe\",\"Round Ceiling Shower (Only Shower)\",\"Round Ceiling Shower With Pipe\",\"Orbed Ceiling Shower (Only Shower)\",\"Orbed Ceiling Shower With Pipe\",\"Multipurpose Towel Shelf\",\"Multipurpose Towel Shelf (Premium)\",\"Double Soap Case (Crown)\",\"Dual Piller Cock Fexible\",\"Dual Pillar Cock (Mars)\",\"Dual Piller Cock\",\"Soap Dispenser Single Line\",\"Soap Dispenser Double Line\",\"Hand Dryer\",\"Auto Perfume Dispenser Double\",\"Auto Sensor Soap Dispenser   -   Jupiter\",\"Auto Sensor Soap Dispenser   -   Mars\",\"Auto Sensor Soap Dispenser   -   Venus\",\"Auto Perfume Dispenser Single\",\"Hand Dryer   -    Venus\",\"Hand Dryer   -   Mars\",\"Soap Corner (Double)\",\"Soap Corner\",\"Soap Corner (Single)\",\"Double Soap Case (Plain)\",\"Bib Cock Lucid\",\"Bib Cock Cav\",\"Paper Holder (Standard)\",\"Soap Case (S.S.)\",\"Super Basin Waist\",\"Basin Waist\",\"Conceal Towel Rail S S Pipe 24\'\",\"Conceal Towel Rail S S Pipe 18\'\",\"Double Towel Bar\",\"Single Towel Bar\",\"Connection Pipe (Super) 36\'\",\"Conceal Paper Holder (S S)\",\"Royel Coat Hook\",\"Soap Case (S S) Plain\",\"24\' Brash Towel Rail\",\"18\' Brash Towel Rail\",\"5\' Grating Net Jali\",\"4\' Grating Net Jali\",\"3\' Grating Net  Jali\",\"2\' Grating Net Jali\"]', '[\"002\",\"002\",\"002\",\"004\",\"004\",\"004\",\"006\",\"006\",\"006\",\"008\",\"008\",\"008\",\"0017\",\"0017\",\"0017\",\"0018\",\"0018\",\"0018\",\"0010\",\"0010\",\"0010\",\"0013\",\"0013\",\"0013\",\"0026\",\"0026\",\"0026\",\"101\",\"101\",\"101\",\"102\",\"102\",\"102\",\"103\",\"103\",\"103\",\"104\",\"104\",\"104\",\"0019\",\"0019\",\"0019\",\"0020\",\"0020\",\"0020\",\"105\",\"105\",\"105\",\"106\",\"106\",\"106\",\"107\",\"107\",\"107\",\"0024\",\"0024\",\"0024\",\"0025\",\"0025\",\"0025\",\"0027\",\"0027\",\"0027\",\"0028\",\"0028\",\"0028\",\"78601\",\"78615\",\"78614\",\"78602\",\"78641\",\"78604\",\"78643\",\"78608\",\"78611\",\"78642\",\"78612\",\"78644\",\"78613\",\"786215\",\"786217\",\"786219\",\"786221\",\"786223\",\"786216\",\"786218\",\"786220\",\"786222\",\"786224\",\"786227\",\"786229\",\"786231\",\"786233\",\"786235\",\"786228\",\"786230\",\"786232\",\"786234\",\"786236\",\"78670\",\"78603\",\"78606\",\"78606P\",\"78606AA\",\"78616\",\"78616P\",\"78616AA\",\"78640\",\"78620\",\"78607\",\"78684\",\"78624\",\"78683\",\"78681\",\"78682\",\"78101\",\"786102\",\"786103\",\"786104\",\"0031\",\"0033\",\"0032\",\"0051\",\"0053\",\"0052\",\"005\",\"108\",\"78680\",\"78629\",\"78630\",\"78663\",\"78633\",\"78634\",\"78635\",\"78636\",\"78637\",\"78638\",\"78656\",\"78647\",\"78648\",\"78649\",\"78653\",\"78652\",\"78651\",\"SP-5001\",\"SP-5002\",\"SP-5003\",\"SP-5004\",\"786113\",\"786114\",\"786126\",\"786117\",\"0045\",\"786123\",\"786212\",\"786210\",\"786211\",\"PU-777\",\"PU-777R\",\"PU-888\",\"FB-121\",\"PU-555\",\"PU-666\",\"HS-444\",\"HS-333\",\"HS-222\",\"HS-121\",\"HS-999\",\"HC-4848\",\"78667\",\"78657\",\"78658\",\"78665\",\"78666\",\"78668\",\"78669\",\"78671\",\"78672\",\"78664\",\"786213\",\"78673\",\"786214\",\"786225\",\"78659\",\"786204\",\"786203\",\"786200\",\"786201\",\"786205\",\"786206\",\"786207\",\"786202\",\"786209\",\"786208\",\"0049\",\"0048\",\"0039\",\"78674\",\"PP-001\",\"PP-002\",\"0043\",\"0050\",\"0034\",\"0036\",\"0035\",\"0037\",\"78661\",\"78662\",\"78675\",\"0046\",\"0044\",\"0041\",\"78631\",\"78632\",\"0073\",\"0075\",\"0074\",\"0076\"]', '[\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster A+ Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Coaster+A Head\",\"Essco Head\",\"Star Head\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Single Lever\",\"Others\",\"Single Lever\",\"Single Lever\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\",\"Others\"]', '[\"50\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\"]', '2020-02-15', '1793870915', '2020-02-14 22:14:32', '2020-02-14 22:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `gender`, `image`, `email`, `phone`, `nid`, `address`, `area`, `position`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(33, 'sajjad sattar', 'sajjad', 'sattar', 'male', '1581163865.jpg', 'sajjad_sattar@gmail.com', '01986348224', '0123456789652', '80/5 North Jatrabari', 'Demra Road Dhaka-1204', 'Admin', '10', NULL, '$2y$10$Z38w8VcTOZS1k1hPuzs/Fe/kElLuyORSXW0i1vjO.lrD.PhwzOnb6', NULL, '2020-02-08 06:04:56', '2020-02-08 06:11:05'),
(34, 'rijwan chowdhury', 'rijwan', 'chowdhury', 'male', '1581163821.jpg', 'chowdhury007@gmail.com', '01986348224', '0120125478965', 'sharif complex', 'purana polton', 'Admin', NULL, NULL, '$2y$10$VC23/ZR0H/kACR79tSXGIeRY3Ol1OStrInOdc7/vJlbZ.FbULfT/6', NULL, '2020-02-08 06:07:01', '2020-02-11 02:58:42'),
(36, 'sattar metal', 'sattar', 'metal', 'male', '1581221350.png', 'sattar_metal@gmail.com', '01986348225', '0123456985214', 'sharif complex', 'sharif complex', 'Sr.Manager', '12', NULL, '$2y$10$veHtQOXhqWK6dYUxJZS.e./MEBzZiR6rpD2yW8i8WDTE4pC2fv/5y', NULL, '2020-02-08 22:09:10', '2020-02-08 22:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_availability` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `brand_name`, `product_name`, `product_code`, `category`, `store`, `booking_product`, `product_availability`, `created_at`, `updated_at`) VALUES
(463, 'Sattar Metal', 'Bath Tub Mixer Royal With Hand Shower', '002', 'Coaster+A Head', '5530', '10', '5520', '2020-01-19 00:27:04', '2020-03-02 01:30:59'),
(464, 'Sattar Metal', 'Bath Tub Mixer Royal With Hand Shower', '002', 'Essco Head', '4980', '10', '4970', '2020-01-19 00:27:04', '2020-03-02 01:30:59'),
(465, 'Sattar Metal', 'Bath Tub Mixer Royal With Hand Shower', '002', 'Star Head', '4987', '8', '4979', '2020-01-19 00:27:04', '2020-03-02 01:30:59'),
(466, 'Sattar Metal', 'Special Fixed Basin Mixer', '004', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(467, 'Sattar Metal', 'Special Fixed Basin Mixer', '004', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(468, 'Sattar Metal', 'Special Fixed Basin Mixer', '004', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(469, 'Sattar Metal', 'Fixed Basin Mixer (Heavy)', '006', 'Coaster+A Head', '4985', '10', '4975', '2020-01-19 00:27:04', '2020-03-02 01:30:59'),
(470, 'Sattar Metal', 'Fixed Basin Mixer (Heavy)', '006', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(471, 'Sattar Metal', 'Fixed Basin Mixer (Heavy)', '006', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(472, 'Sattar Metal', 'Full Moving Basin Mixer', '008', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(473, 'Sattar Metal', 'Full Moving Basin Mixer', '008', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(474, 'Sattar Metal', 'Full Moving Basin Mixer', '008', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:48'),
(475, 'Sattar Metal', 'Long Piller Cock', '0017', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:49'),
(476, 'Sattar Metal', 'Long Piller Cock', '0017', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:49'),
(477, 'Sattar Metal', 'Long Piller Cock', '0017', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:04', '2020-01-19 04:57:49'),
(478, 'Sattar Metal', 'Moving Piller Cock', '0018', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(479, 'Sattar Metal', 'Moving Piller Cock', '0018', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(480, 'Sattar Metal', 'Moving Piller Cock', '0018', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(481, 'Sattar Metal', 'Sink Mixer', '0010', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(482, 'Sattar Metal', 'Sink Mixer', '0010', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(483, 'Sattar Metal', 'Sink Mixer', '0010', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(484, 'Sattar Metal', 'Moving Sink Cock', '0013', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(485, 'Sattar Metal', 'Moving Sink Cock', '0013', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(486, 'Sattar Metal', 'Moving Sink Cock', '0013', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(487, 'Sattar Metal', 'Sink Bib Cock', '0026', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(488, 'Sattar Metal', 'Sink Bib Cock', '0026', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(489, 'Sattar Metal', 'Sink Bib Cock', '0026', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:49'),
(490, 'Sattar Metal', 'Full Moving Basin Fexible', '101', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(491, 'Sattar Metal', 'Full Moving Basin Fexible', '101', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(492, 'Sattar Metal', 'Full Moving Basin Fexible', '101', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(493, 'Sattar Metal', 'Sink Mixer Fexible', '102', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(494, 'Sattar Metal', 'Sink Mixer Fexible', '102', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(495, 'Sattar Metal', 'Sink Mixer Fexible', '102', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(496, 'Sattar Metal', 'Moving Piller Cock Fexible', '103', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(497, 'Sattar Metal', 'Moving Piller Cock Fexible', '103', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(498, 'Sattar Metal', 'Moving Piller Cock Fexible', '103', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(499, 'Sattar Metal', 'Moving Sink Cock Fexible', '104', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(500, 'Sattar Metal', 'Moving Sink Cock Fexible', '104', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(501, 'Sattar Metal', 'Moving Sink Cock Fexible', '104', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(502, 'Sattar Metal', '1/2\' Conceal Stop Cock (Heavy)', '0019', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(503, 'Sattar Metal', '1/2\' Conceal Stop Cock (Heavy)', '0019', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(504, 'Sattar Metal', '1/2\' Conceal Stop Cock (Heavy)', '0019', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:50'),
(505, 'Sattar Metal', '3/4\' Conceal Stop Cock (Heavy)', '0020', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:51'),
(506, 'Sattar Metal', '3/4\' Conceal Stop Cock (Heavy)', '0020', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:51'),
(507, 'Sattar Metal', '3/4\' Conceal Stop Cock (Heavy)', '0020', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:51'),
(508, 'Sattar Metal', '1/2\' Conceal Stop Cock (Premium)', '105', 'Coaster A+ Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:51'),
(509, 'Sattar Metal', '1/2\' Conceal Stop Cock (Premium)', '105', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:51'),
(510, 'Sattar Metal', '1/2\' Conceal Stop Cock (Premium)', '105', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:05', '2020-01-19 04:57:51'),
(511, 'Sattar Metal', '3/4\' Conceal Stop Cock (Premium)', '106', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(512, 'Sattar Metal', '3/4\' Conceal Stop Cock (Premium)', '106', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(513, 'Sattar Metal', '3/4\' Conceal Stop Cock (Premium)', '106', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(514, 'Sattar Metal', '1\' Conceal Stop Cock (Premium)', '107', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(515, 'Sattar Metal', '1\' Conceal Stop Cock (Premium)', '107', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(516, 'Sattar Metal', '1\' Conceal Stop Cock (Premium)', '107', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(517, 'Sattar Metal', 'Angle Stop Cock', '0024', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(518, 'Sattar Metal', 'Angle Stop Cock', '0024', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(519, 'Sattar Metal', 'Angle Stop Cock', '0024', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(520, 'Sattar Metal', 'Two In One Bib Cock', '0025', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(521, 'Sattar Metal', 'Two In One Bib Cock', '0025', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(522, 'Sattar Metal', 'Two In One Bib Cock', '0025', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:51'),
(523, 'Sattar Metal', 'Conceal Bib Cock', '0027', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(524, 'Sattar Metal', 'Conceal Bib Cock', '0027', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(525, 'Sattar Metal', 'Conceal Bib Cock', '0027', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(526, 'Sattar Metal', 'Conceal Bib Cock (Without Filter)', '0028', 'Coaster+A Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(527, 'Sattar Metal', 'Conceal Bib Cock (Without Filter)', '0028', 'Essco Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(528, 'Sattar Metal', 'Conceal Bib Cock (Without Filter)', '0028', 'Star Head', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(529, 'Sattar Metal', 'Single Lever Bath Tub Mixer With Hand Shower', '78601', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(530, 'Sattar Metal', 'Single Lever Bath Tub Mixer With Hand Shower (Orbed)', '78615', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(531, 'Sattar Metal', 'Single Lever Bath Tub Mixer With Hand Shower (Pony)', '78614', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(532, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set 1/2\'', '78602', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(533, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set Super 1/2\'', '78641', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(534, 'Sattar Metal', 'Single Lever Conceal Spout Mixer 1/2\'', '78604', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(535, 'Sattar Metal', 'Single Lever Conceal Super Spout Mixer 1/2\'', '78643', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(536, 'Sattar Metal', 'Single Lever Conceal Shower Mixer 1/2\'', '78608', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:52'),
(537, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set 3/4\'', '78611', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(538, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set Super 3/4\'', '78642', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(539, 'Sattar Metal', 'Single Lever Conceal Spout Mixer 3/4\'', '78612', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(540, 'Sattar Metal', 'Single Lever Conceal Super Spout Mixer 3/4\'', '78644', 'Single Lever', '4985', '10', '4975', '2020-01-19 00:27:06', '2020-03-02 01:30:59'),
(541, 'Sattar Metal', 'Single Lever Conceal Shower Mixer 3/4\'', '78613', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(542, 'Sattar Metal', 'Square Conceal Shower Mixer Set 1/2\'', '786215', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(543, 'Sattar Metal', 'Square Conceal Spout Mixer 1/2\'', '786217', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(544, 'Sattar Metal', 'Square Conceal Shower Mixer 1/2\'', '786219', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(545, 'Sattar Metal', 'Square Conceal Shower Mixer Set (Super) 1/2\'', '786221', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:06', '2020-01-19 04:57:53'),
(546, 'Sattar Metal', 'Square Conceal Super Spout Mixer 1/2\'', '786223', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:53'),
(547, 'Sattar Metal', 'Square Conceal Shower Mixer Set 3/4\'', '786216', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:53'),
(548, 'Sattar Metal', 'Square Conceal Spout Mixer 3/4\'', '786218', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:53'),
(549, 'Sattar Metal', 'Square Conceal Shower Mixer 3/4\'', '786220', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(550, 'Sattar Metal', 'Square Conceal Shower Mixer Set (Super) 3/4\'', '786222', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(551, 'Sattar Metal', 'Square Conceal Super Spout Mixer 3/4\'', '786224', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(552, 'Sattar Metal', 'Elite Conceal Shower Mixer Set 1/2\'', '786227', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(553, 'Sattar Metal', 'Elite Conceal Shower Spout Mixer Set 1/2\'', '786229', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(554, 'Sattar Metal', 'Elite Conceal Shower Mixer 1/2\'', '786231', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(555, 'Sattar Metal', 'Elite Conceal Super Shower Mixer Set 1/2\'', '786233', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(556, 'Sattar Metal', 'Elite Conceal Super Spout Mixer 1/2\'', '786235', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(557, 'Sattar Metal', 'Elite Conceal Shower Mixer Set (Square) 1/2\'', '786228', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(558, 'Sattar Metal', 'Elite Conceal Shower Spout Mixer(Sqaure) 1/2\'', '786230', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(559, 'Sattar Metal', 'Elite Conceal Shower Mixer (Sqaure) 1/2\'', '786232', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(560, 'Sattar Metal', 'Elite Conceal Super Shower Mixer Set(Square) 1/2\'', '786234', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(561, 'Sattar Metal', 'Elite Conceal Super Spout Mixer (Square) 1/2\'', '786236', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(562, 'Sattar Metal', 'Single Lever Conceal Shower Mixer Set (3 Lines)', '78670', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(563, 'Sattar Metal', 'Single Lever Basin Mixer (Heavy)', '78603', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(564, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78606', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(565, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78606P', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(566, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78606AA', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:54'),
(567, 'Sattar Metal', 'Single Lever Sink Mixer (Orbed)', '78616', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(568, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78616P', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(569, 'Sattar Metal', 'Single Lever Sink Mixer (Special)', '78616AA', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(570, 'Sattar Metal', 'Single Lever Basin Mixer (Crystal)', '78640', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(571, 'Sattar Metal', 'Single Lever Piller Cock (Round)', '78620', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(572, 'Sattar Metal', 'Single Lever Basin Mixer (Special)', '78607', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(573, 'Sattar Metal', 'Single Lever Basin Mixer (Square)', '78684', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(574, 'Sattar Metal', 'Single Lever Basin Mixer (Royal)', '78624', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(575, 'Sattar Metal', 'Single Lever Basin Mixer (Mars)', '78683', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(576, 'Sattar Metal', 'Single Lever Basin Mixer (Orbed)', '78681', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(577, 'Sattar Metal', 'Single Lever Basin Mixer (Pony)', '78682', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(578, 'Sattar Metal', 'Sensor Automatic Piller Cock (Venus)', '78101', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(579, 'Sattar Metal', 'Sensor Automatic Piller Cock (Neptune)', '786102', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(580, 'Sattar Metal', 'Sensor Automatic Piller Cock (Jupiter)', '786103', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(581, 'Sattar Metal', 'Sensor Automatic Piller Cock (Mars)', '786104', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:07', '2020-01-19 04:57:55'),
(582, 'Sattar Metal', 'Star Moving Shower', '0031', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:55'),
(583, 'Sattar Metal', 'Moving Shower Super', '0033', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:55'),
(584, 'Sattar Metal', 'Moving Shower(Orbed)', '0032', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:55'),
(585, 'Sattar Metal', 'Bib Cock (Orbed)', '0051', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:55'),
(586, 'Sattar Metal', 'Piller Cock (Orbed)', '0053', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(587, 'Sattar Metal', 'Piller Cock (Pony)', '0052', 'Others', '4985', '10', '4975', '2020-01-19 00:27:08', '2020-03-02 01:30:59'),
(588, 'Sattar Metal', 'Basin Mixer (Orbed)', '005', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(589, 'Sattar Metal', 'Conceal Stop Cock (Orbed)', '108', 'Single Lever', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(590, 'Sattar Metal', 'Angle Stop Cock (Orbed)', '78680', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(591, 'Sattar Metal', 'Angle Stop Cock (Smart)', '78629', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(592, 'Sattar Metal', 'Connection Pipe (Super) 24\'', '78630', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(593, 'Sattar Metal', 'Dining Towel Bar', '78663', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(594, 'Sattar Metal', 'Pillar Cock (Super)', '78633', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(595, 'Sattar Metal', 'Pillar Cock (Smart)', '78634', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(596, 'Sattar Metal', 'Bib Cock (Smart)', '78635', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:56'),
(597, 'Sattar Metal', 'Bib Cock (Sqaure)', '78636', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(598, 'Sattar Metal', 'Two   -   In   -   One (Smart)', '78637', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(599, 'Sattar Metal', 'Two  -  In  -  One (Square)', '78638', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(600, 'Sattar Metal', 'Super Hand Shower', '78656', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(601, 'Sattar Metal', 'Two  -  In  -  One (Super)', '78647', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(602, 'Sattar Metal', 'Bib Cock (Super)', '78648', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(603, 'Sattar Metal', 'Sink Bib Cock (Super)', '78649', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(604, 'Sattar Metal', 'Sink Bib Cock (Smart)', '78653', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(605, 'Sattar Metal', 'Pillar Cock (Push)', '78652', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(606, 'Sattar Metal', 'Bib Cock (Push)', '78651', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(607, 'Sattar Metal', 'Single Lever Bathtub Mixer (Smart)', 'SP-5001', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(608, 'Sattar Metal', 'Single Lever Basin Mixer (Super)', 'SP-5002', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(609, 'Sattar Metal', 'Single Lever Basin Mixer (Smart)', 'SP-5003', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(610, 'Sattar Metal', 'Single Lever Sink Mixer (Smart)', 'SP-5004', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(611, 'Sattar Metal', 'Soap Case (Premium)', '786113', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:57'),
(612, 'Sattar Metal', 'Soap Case (Royel)', '786114', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(613, 'Sattar Metal', 'Soap Case (Imperial)', '786126', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(614, 'Sattar Metal', 'Square Towel Rail', '786117', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(615, 'Sattar Metal', 'Cloth Hanger', '0045', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(616, 'Sattar Metal', '4\' Grating Box Jali', '786123', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(617, 'Sattar Metal', '4\' Floor Drain  -  Jupiter', '786212', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(618, 'Sattar Metal', '4\' Floor Drain  -  Mars', '786210', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(619, 'Sattar Metal', '4\' Floor Drain  -  Venus', '786211', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(620, 'Sattar Metal', 'Push Shower', 'PU-777', 'Others', '5000', '0', '5000', '2020-01-19 00:27:08', '2020-01-19 04:57:58'),
(621, 'Sattar Metal', 'Push Shower Royel', 'PU-777R', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:58'),
(622, 'Sattar Metal', 'Push Shower Premium', 'PU-888', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:58'),
(623, 'Sattar Metal', 'F B Push Shower', 'FB-121', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:58'),
(624, 'Sattar Metal', 'Orbed Push Shower', 'PU-555', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:58'),
(625, 'Sattar Metal', 'Long Push Shower', 'PU-666', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:58'),
(626, 'Sattar Metal', 'Orbed Hand Shower', 'HS-444', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:58'),
(627, 'Sattar Metal', 'Round Hand Shower', 'HS-333', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(628, 'Sattar Metal', 'Hand Shower (Mars)', 'HS-222', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(629, 'Sattar Metal', 'Hand Shower', 'HS-121', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(630, 'Sattar Metal', 'Hand Shower', 'HS-999', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(631, 'Sattar Metal', 'Hand Shower Chain', 'HC-4848', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(632, 'Sattar Metal', 'Urinal Angle Stop Cock Set', '78667', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(633, 'Sattar Metal', 'Tulip Ceiling Shower (Shower Only)', '78657', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(634, 'Sattar Metal', 'Tulip Ceiling Shower With Pipe', '78658', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(635, 'Sattar Metal', 'Square Ceiling Shower (Onlybshower)', '78665', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(636, 'Sattar Metal', 'Square Ceiling Shower With Pipe', '78666', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(637, 'Sattar Metal', 'Round Ceiling Shower (Only Shower)', '78668', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(638, 'Sattar Metal', 'Round Ceiling Shower With Pipe', '78669', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(639, 'Sattar Metal', 'Orbed Ceiling Shower (Only Shower)', '78671', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(640, 'Sattar Metal', 'Orbed Ceiling Shower With Pipe', '78672', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:57:59'),
(641, 'Sattar Metal', 'Multipurpose Towel Shelf', '78664', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(642, 'Sattar Metal', 'Multipurpose Towel Shelf (Premium)', '786213', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(643, 'Sattar Metal', 'Double Soap Case (Crown)', '78673', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(644, 'Sattar Metal', 'Dual Piller Cock Fexible', '786214', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(645, 'Sattar Metal', 'Dual Pillar Cock (Mars)', '786225', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(646, 'Sattar Metal', 'Dual Piller Cock', '78659', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(647, 'Sattar Metal', 'Soap Dispenser Single Line', '786204', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(648, 'Sattar Metal', 'Soap Dispenser Double Line', '786203', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(649, 'Sattar Metal', 'Hand Dryer', '786200', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(650, 'Sattar Metal', 'Auto Perfume Dispenser Double', '786201', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(651, 'Sattar Metal', 'Auto Sensor Soap Dispenser   -   Jupiter', '786205', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(652, 'Sattar Metal', 'Auto Sensor Soap Dispenser   -   Mars', '786206', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(653, 'Sattar Metal', 'Auto Sensor Soap Dispenser   -   Venus', '786207', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(654, 'Sattar Metal', 'Auto Perfume Dispenser Single', '786202', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(655, 'Sattar Metal', 'Hand Dryer   -    Venus', '786209', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(656, 'Sattar Metal', 'Hand Dryer   -   Mars', '786208', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(657, 'Sattar Metal', 'Soap Corner (Double)', '0049', 'Others', '5000', '0', '5000', '2020-01-19 00:27:09', '2020-01-19 04:58:00'),
(658, 'Sattar Metal', 'Soap Corner', '0048', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:00'),
(659, 'Sattar Metal', 'Soap Corner (Single)', '0039', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:00'),
(660, 'Sattar Metal', 'Double Soap Case (Plain)', '78674', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(661, 'Sattar Metal', 'Bib Cock Lucid', 'PP-001', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(662, 'Sattar Metal', 'Bib Cock Cav', 'PP-002', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(663, 'Sattar Metal', 'Paper Holder (Standard)', '0043', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(664, 'Sattar Metal', 'Soap Case (S.S.)', '0050', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(665, 'Sattar Metal', 'Super Basin Waist', '0034', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(666, 'Sattar Metal', 'Basin Waist', '0036', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(667, 'Sattar Metal', 'Conceal Towel Rail S S Pipe 24\'', '0035', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(668, 'Sattar Metal', 'Conceal Towel Rail S S Pipe 18\'', '0037', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(669, 'Sattar Metal', 'Double Towel Bar', '78661', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(670, 'Sattar Metal', 'Single Towel Bar', '78662', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(671, 'Sattar Metal', 'Connection Pipe (Super) 36\'', '78675', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(672, 'Sattar Metal', 'Conceal Paper Holder (S S)', '0046', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:01'),
(673, 'Sattar Metal', 'Royel Coat Hook', '0044', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(674, 'Sattar Metal', 'Soap Case (S S) Plain', '0041', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(675, 'Sattar Metal', '24\' Brash Towel Rail', '78631', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(676, 'Sattar Metal', '18\' Brash Towel Rail', '78632', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(677, 'Sattar Metal', '5\' Grating Net Jali', '0073', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(678, 'Sattar Metal', '4\' Grating Net Jali', '0075', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(679, 'Sattar Metal', '3\' Grating Net  Jali', '0074', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02'),
(680, 'Sattar Metal', '2\' Grating Net Jali', '0076', 'Others', '5000', '0', '5000', '2020-01-19 00:27:10', '2020-01-19 04:58:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_sales`
--
ALTER TABLE `all_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_sales`
--
ALTER TABLE `approved_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challans`
--
ALTER TABLE `challans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealer_reports`
--
ALTER TABLE `dealer_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_reports`
--
ALTER TABLE `employee_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry_visits`
--
ALTER TABLE `entry_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hierarchies`
--
ALTER TABLE `hierarchies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hierarchy_wise_products`
--
ALTER TABLE `hierarchy_wise_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_wise_products`
--
ALTER TABLE `location_wise_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_visits`
--
ALTER TABLE `next_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_wise_sales`
--
ALTER TABLE `product_wise_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_sales`
--
ALTER TABLE `all_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `approved_sales`
--
ALTER TABLE `approved_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `challans`
--
ALTER TABLE `challans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealer_reports`
--
ALTER TABLE `dealer_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_reports`
--
ALTER TABLE `employee_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entry_visits`
--
ALTER TABLE `entry_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hierarchies`
--
ALTER TABLE `hierarchies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hierarchy_wise_products`
--
ALTER TABLE `hierarchy_wise_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location_wise_products`
--
ALTER TABLE `location_wise_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `next_visits`
--
ALTER TABLE `next_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `product_wise_sales`
--
ALTER TABLE `product_wise_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
