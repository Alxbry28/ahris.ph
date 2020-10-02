<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // base for Login
    public function login() {
    	return view('login');
    }

    //base for Register

    public function register() {
    	return view('register');
    }

    /// base for Blogs
    public function ahrisblog() {
        return view('blogs');
    }

    //ar-admin dashboard
     public function adminDashboard() {
    	return view('admin-dashboard.home');
    }

    //ar-admin Profile
    public function adminProfile() {
    	return view('admin-dashboard.ar-admin-profile');
    }

    //ar-analytics
    public function adminAnalytics() {
    	return view('admin-dashboard.ar-analytics');
    }

    //ar-crashlogs Report
    public function adminCrashLogs() {
    	return view('admin-dashboard.ar-crashlogs-report');
    }

    //ar-transaction Overview
    public function adminOverview() {
    	return view('admin-dashboard.ar-transaction-overview');
    }

    //ar-user Authentication
    public function adminUserAuth() {
    	return view('admin-dashboard.ar-user-authentication');
    }

    //ar-user User Control
    public function adminUserControl() {
    	return view('admin-dashboard.ar-user-control');
    }

    //ar-web Monitoring
    public function adminMonitoring() {
    	return view('admin-dashboard.ar-web-monitoring');
    }

    // ar-web Updates
    public function adminWebUpdates() {
    	return view('admin-dashboard.ar-web-updates');
    }

    // FOR USERS ROUTING FUNCTION

    public function userProfile() {
        return view('dashboard.profile');
    }

    public function userPersonalSettings() {
        return view('dashboard.personal-settings');
    }

    public function modalUsername() {
        return view('dashboard.modal');
    }

    //  END OF USER ROUTING FUNCTIONS


    // COMPANY ROUTING FUNCTIONS

    public function companyDashboard() {
        return view('company.dashboard');
    }

    //  END OF COMPANY ROUTING FUNCTIONS



    // COMPANY-RECORDS ROUTING FUNCTIONS

    public function companyOrganizationSettings() {
        return view('company.records.organization-settings');
    }   

    public function companyChartsOfAccounts() {
        return view('company.records.records-charts-of-accounts');
    }

    public function companyRecordCustomer() {
        return view('company.records.records-customer');
    }

    public function companyRecordProductServices() {
        return view('company.records.records-products-services');
    }

    public function companyReocrdSuppliers() {
        return view('company.records.records-suppliers');
    }

    public function companyTaxRate() {
        return view('company.records.records-tax-rate');
    }

    public function companyRecordUsers() {
        return view('company.records.records-users');
    }



    // END OF COMPANY-RECORDS ROUTING FUNCTIONS


    // COMPANY-QUICK ACTIONS ROUTING FUNCTIONS


    // END OF COMPANY-QUICK ACTIONS ROUTING FUNCTIONS


    // COMPANY-REPORTS ROUTING FUNCTIONS


    // END OF COMPANY-REPORTS ROUTING FUNCTIONS

}
