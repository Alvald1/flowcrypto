# FlowCrypto - Cryptocurrency Wallet & Payment Management System

## Overview

FlowCrypto is a comprehensive cryptocurrency wallet management system built on WordPress that enables users to manage USDT transactions through TRC20, maintain payment requisites, and track transaction history. The system is designed for cryptocurrency traders and payment processors who need to manage multiple payment methods and banking relationships.

## System Architecture

The system consists of three main components:
1. **WordPress Core Platform**: Web interface and database management
2. **Python Traffic Processing Server**: Handles transaction routing and verification
3. **Mobile Application**: Provides notifications and on-the-go management

### Component Communication

```
┌─────────────────┐       ┌─────────────────┐       ┌─────────────────┐
│                 │       │                 │       │                 │
│  WordPress CMS  │◄─────►│  Python Server  │◄─────►│  Mobile App     │
│  (PHP Backend)  │  API  │  (Transaction   │  Push │  (Notifications │
│                 │       │   Processing)   │       │   & Controls)   │
└─────────────────┘       └─────────────────┘       └─────────────────┘
        ▲                         ▲                        
        │                         │                        
        ▼                         ▼                        
┌─────────────────┐       ┌─────────────────┐       
│                 │       │                 │       
│  MySQL Database │       │ TRON Blockchain │       
│                 │       │                 │       
└─────────────────┘       └─────────────────┘       
```

## Technologies Used

### Backend
- **WordPress**: Core CMS platform with custom templates and functions
- **PHP**: Custom PHP implementation for user management and cryptocurrency operations
- **Python**: Server for transaction processing and routing
- **WordPress Meta API**: For storing user wallet data, transaction history, and requisites
- **AJAX**: Asynchronous operations for real-time data updates
- **TRON Blockchain API**: Integration with TRC20 for USDT transactions verification
- **REST API**: Custom endpoints for mobile app communication

### Frontend
- **jQuery**: DOM manipulation and AJAX requests
- **Bootstrap 4**: UI components and responsive design
- **Select2**: Enhanced dropdown selections for bank and payment method selection
- **Font Awesome**: Icon system used throughout the interface
- **Custom JavaScript**: Modular components for specific functionality areas

### Mobile Application
- **Push Notifications**: Real-time transaction alerts
- **Secure Authentication**: Device-based verification
- **Transaction Monitoring**: Status tracking and approval
- **Payment Management**: Mobile requisites control

### Traffic Processing Server
- **Python**: Core server implementation
- **API Integration**: Connection with WordPress and blockchain
- **Load Balancing**: Distribution of transaction processing
- **Fraud Detection**: Pattern analysis for suspicious activities
- **Transaction Routing**: Optimal path selection for transactions

### Security
- **WordPress Nonce System**: Protection against CSRF attacks
- **User Role Management**: Restricted access based on user capabilities
- **Device Management**: Multiple device authentication and tracking
- **Transaction Verification**: Blockchain-based verification for deposits
- **API Rate Limiting**: Prevention of brute force attacks
- **Encrypted Communication**: Secure data transfer between components

## Core Features

### Wallet Management
- USDT balance tracking and management
- Deposit via TRC20 address
- Withdrawal functionality with verification
- Insurance deposit system (1,000 USDT minimum)
- Commission structure (5.5% for receiving, 2.0% for payouts)

### Requisites Management
- Support for 100+ payment methods and banks
- Multiple currency support (RUB, UZS)
- Grouping functionality for organizing payment methods
- Active/inactive status toggle for each requisite
- Limits management for daily and monthly transaction volumes
- Bank account & payment method details storage

### Transaction History
- Complete transaction logging
- Filtering by date range and transaction type
- Status tracking (new, pending payment, pending confirmation, completed, cancelled, disputed)
- Balance tracking before and after each transaction

### Mobile Notification System
- Transaction alerts (deposits, withdrawals, status changes)
- Security notifications (new device login, settings changes)
- Market updates and system announcements
- Custom notification preferences
- Quick action responses from notification panel

### Python Server Features
- Real-time transaction processing
- Traffic analysis and optimization
- Load distribution across payment methods
- Automated routing based on availability and limits
- Performance metrics and reporting
- Fraud detection algorithms

### Statistics & Reporting
- Transaction volume tracking
- Performance metrics for payment methods
- Daily and monthly limits monitoring
- Concurrent transaction tracking

## Database Structure

Data is stored primarily using WordPress user meta:
- `balance`: User's available USDT balance
- `limit`: Insurance deposit amount (target: 1,000 USDT)
- `devices`: Array of user's authenticated devices
- `groups`: Payment method grouping configuration
- `requisites`: Array of payment methods and bank details
- `operations`: Transaction history with timestamps and balances
- `status_auto`: Automatic status management configuration

## API Endpoints

The system provides several API endpoints for mobile app integration:

```
GET  /api/v1/balance           - Get current balance and limits
POST /api/v1/transaction       - Create new transaction
GET  /api/v1/transactions      - List transactions with filters
POST /api/v1/device/register   - Register new mobile device
POST /api/v1/notifications     - Update notification preferences
```

## Installation Requirements

### WordPress Platform
- WordPress 5.0+
- PHP 7.4+
- MySQL 5.6+
- HTTPS enabled for secure connections
- Cron jobs for regular blockchain synchronization
- API access to TRON blockchain

### Python Server
- Python 3.8+
- Flask or Django framework
- Redis for queue management
- PostgreSQL for transaction logging
- Server with min 4GB RAM and 2 CPU cores

### Mobile Application Requirements
- Android 5.0+ / iOS 12.0+
- Push notification certificates configured
- API keys for blockchain services
- Secure storage for credentials

## Development & Deployment

### Local Development Setup
1. Clone the repository
2. Set up WordPress development environment
3. Configure Python server environment
4. Set up mobile app development environment
5. Configure local environment variables

### Production Deployment
1. Set up secure hosting environment
2. Configure WordPress production settings
3. Deploy Python server with monitoring
4. Configure mobile app backend services
5. Set up SSL certificates and secure connections
6. Implement backup and disaster recovery plans

## Best Practices Implemented

1. **Nonce Verification**: All AJAX calls use WordPress nonce for security
2. **Input Sanitization**: User inputs are sanitized before processing
3. **Error Handling**: Comprehensive error capturing and reporting
4. **Responsive Design**: Mobile-friendly interface using Bootstrap
5. **Modular JavaScript**: Functionality separated into logical components
6. **Blockchain Verification**: Transactions verified through blockchain API
7. **User Experience**: Intuitive interface with status indicators and feedback
8. **API Versioning**: Clear versioning for mobile app compatibility
9. **Performance Optimization**: Caching and load distribution
10. **Security First**: Multi-layer security approach across all components

## License

[License information]

---

© 2023 FlowCrypto. All Rights Reserved.
