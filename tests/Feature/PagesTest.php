<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    #[DataProvider('pageRoutesProvider')]
    public function test_all_differentiated_pages_return_status_200(string $uri): void
    {
        $response = $this->get($uri);
        $response->assertStatus(200);
    }

    public static function pageRoutesProvider(): array
    {
        return [
            'Home 01' => ['/'],
            'Home 02' => ['/home-2'],
            'About Us' => ['/about'],
            'Services Grid' => ['/services'],
            'Service Details' => ['/services/details'],
            'Pricing Plan' => ['/pricing'],
            'Testimonials' => ['/testimonials'],
            'Team Grid' => ['/team'],
            'Team Details' => ['/team/details'],
            'FAQ' => ['/faq'],
            'Projects Grid' => ['/projects'],
            'Project Details' => ['/projects/details'],
            'Blog Grid' => ['/blog'],
            'Blog Details' => ['/blog/details'],
            'Shop' => ['/shop'],
            'Shop Sidebar' => ['/shop/sidebar'],
            'Shop Details' => ['/shop/details'],
            'Cart' => ['/cart'],
            'Checkout' => ['/checkout'],
            'Contact' => ['/contact'],
            '404 Page' => ['/404'],
        ];
    }

    public function test_contact_form_submission_success(): void
    {
        $response = $this->post('/contact', [
            'form_name' => 'Jane Doe',
            'form_email' => 'jane@example.com',
            'form_subject' => 'Yoga Inquiry',
            'form_phone' => '1234567890',
            'form_message' => 'Hello, I would like to inquire about your yoga classes.',
        ]);

        $response->assertSessionHas('success');
        $response->assertRedirect();
    }

    public function test_newsletter_subscription_success(): void
    {
        $response = $this->post('/newsletter', [
            'email' => 'subscriber@example.com',
        ]);

        $response->assertSessionHas('newsletter_success');
        $response->assertRedirect();
    }

    public function test_language_switch_to_hindi(): void
    {
        $response = $this->get('/lang/hi');
        $response->assertRedirect();
        $response->assertSessionHas('locale', 'hi');

        // Check that page renders Hindi content
        $homeResponse = $this->withSession(['locale' => 'hi'])->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('होम');
        $homeResponse->assertSee('स्वामी नागेंद्र');
        $homeResponse->assertSee('यतोहि फाउंडेशन');
    }

    public function test_language_switch_to_english(): void
    {
        $response = $this->get('/lang/en');
        $response->assertRedirect();
        $response->assertSessionHas('locale', 'en');

        // Check that page renders English content
        $homeResponse = $this->withSession(['locale' => 'en'])->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertSee('Home');
        $homeResponse->assertSee('Swami Nagendra');
        $homeResponse->assertSee('Yatohi Foundation');
    }

    public function test_theme_color_is_updated_to_red(): void
    {
        $css = file_get_contents(public_path('css/style.css'));
        $this->assertStringContainsString('#ED2C2B', $css);
        $this->assertStringNotContainsString('--theme-color1: #417572;', $css);
    }
}
