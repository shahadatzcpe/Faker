<?php

namespace Faker\Provider\bn_BD;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',        
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'অনন্ত', 'আব্দুল্লাহ', 'আহসান',  'ইমরুল',
        'করিম', 'জলিল', 'বরকত', 'মাসনুন',
        'রহিম',  'রিফাত', 'হাসনাত', 'হাসান',
        'শাহাদাত', 'আজাদ', 'সাইফুল', 'শাওন ',
        'আজিজ', 'এমরান', 'পারভেজ', 'শোয়েব', 
        'ইসমাইল', 'আনিস', 'মাসুম', 'এজাজুল', 
        'ফিরোজ', 'জসিম', 'পলাশ', 'ফয়সাল', 
    );

    protected static $firstNameFemale = array(
        'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা',
        'মাহজাবিন', 'মেহনাজ', 'রহিমা', 'লাবনী',
        'সাবরিন', 'সাবরিনা', 'হাসিন', 'রুমা', 
        'তানভীন', 'তামান্না', 'লিমা', 'মলি',
        'পলি','সানজিদা','সুমাইয়া','সেতু', 
    );

    protected static $lastName = array(
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম','হাওলাদার', 'মাতবর', 'কাজী' , 'মোল্লা', 'পাটুয়ারী
    );

    protected static $titleMale = array('মি.', 'মোঃ' , 'কাজী', 'শেখ' );

    protected static $titleFemale = array('মিসেস.', 'মিস.', 'মোসাঃ' );
}
