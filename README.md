# Drupal CI/CD Pipeline Demo

This repository contains a demonstration CI/CD pipeline for Drupal projects, created for the **"From manual to magical: our pipeline revamp"** presentation at DrupalCon Atlanta 2025 by Samuel Rollin (Rollin) and Haylee Millar (Platform.sh).

## Overview

This demonstration shows a practical implementation of a continuous integration and continuous deployment pipeline for Drupal projects using GitHub Actions. The pipeline demonstrates essential quality assurance, security, and accessibility checks that can be integrated into your Drupal development workflow.

## Pipeline Features

The workflow consists of three main jobs:

### 1. Quality Assurance
- **PHP CodeSniffer**: Enforces Drupal coding standards and best practices
- **PHPStan**: Performs static code analysis to catch potential errors
- Runs on all pushes to main, develop, and staging branches and all pull requests to develop

### 2. Security Checks
- **Composer Audit**: Checks for known vulnerabilities in dependencies
- **OWASP Dependency Check**: Comprehensive security scanning for dependencies
- Automatically fails builds with critical security issues (CVSS score 9+)

### 3. Accessibility Testing
- **Pa11y**: Automated accessibility testing against WCAG standards
- Tests are run against the staging environment
- Generates comprehensive accessibility reports

### Notification System
- Email notifications on pipeline failures
- Detailed error reporting to help quickly identify and resolve issues

## Getting Started

To use this pipeline in your own Drupal project:

1. Copy the `.github/workflows/drupal-cicd.yml` file to your repository
2. Configure the following GitHub secrets:
  - `STAGING_URL`: URL of your staging environment
  - `SMTP_SERVER`: SMTP server for email notifications
  - `SMTP_USERNAME`: SMTP username
  - `SMTP_PASSWORD`: SMTP password
3. Customize the pipeline as needed for your specific project requirements

## Pipeline Workflow

The pipeline runs in the following sequence:

1. **Quality** job runs first
2. **Security** job runs if Quality passes
3. **Accessibility** job runs if Security passes
4. **Notify-failure** job runs if any of the above jobs fail

## Artifacts and Reports

The pipeline generates and stores the following artifacts:

- OWASP Dependency Check reports (retained for 30 days)
- Pa11y accessibility reports (JSON format)

These reports can be downloaded from the GitHub Actions run page.

## Presentation Resources

For more information about this demonstration and automated deploy pipelines for Drupal:

- [Presentation Slides](https://example.com/slides) (Link will be available after the presentation)

## Contact

For questions or further information about this demonstration:

- Samuel Rollin - sam@rollin.org
- Haylee Millar - Platform.sh

## License

This demonstration code is available under the [MIT License](LICENSE).
