# Site Já - Agency Website

## Overview

Site Já is a Brazilian web development agency website that promises website delivery in up to 72 hours. The project is a full-stack TypeScript application featuring a modern dark-themed landing page with neon green accents, built with React frontend and Express backend. The site includes pricing plans with Stripe payment integration, a contact inquiry system, and smooth scroll animations.

## User Preferences

Preferred communication style: Simple, everyday language.

## System Architecture

### Frontend Architecture
- **Framework**: React 18 with TypeScript
- **Routing**: Wouter (lightweight React router)
- **Styling**: Tailwind CSS with custom dark theme (neon green accent color #39FF14)
- **UI Components**: Shadcn/ui component library (New York style variant)
- **Animations**: Framer Motion for scroll reveals and micro-interactions
- **State Management**: TanStack Query (React Query) for server state
- **Build Tool**: Vite with custom plugins for Replit integration

### Backend Architecture
- **Runtime**: Node.js with Express
- **Language**: TypeScript (ESM modules)
- **API Design**: REST endpoints defined in shared route contracts (`shared/routes.ts`)
- **Validation**: Zod schemas shared between frontend and backend

### Data Storage
- **Database**: PostgreSQL
- **ORM**: Drizzle ORM with drizzle-zod for schema-to-validation integration
- **Schema Location**: `shared/schema.ts` contains all database table definitions
- **Migrations**: Managed via `drizzle-kit push` command

### Key Design Patterns
1. **Shared Type Safety**: API routes, input validation, and response types are defined in `shared/routes.ts` and used by both client and server
2. **Path Aliases**: `@/` maps to client source, `@shared/` maps to shared code
3. **Component Architecture**: Custom components (NeonButton, PricingCard, SectionHeading) extend Shadcn/ui primitives
4. **Single Page App**: All routing handled client-side with server fallback to index.html

### Directory Structure
- `client/` - React frontend application
- `server/` - Express backend with routes, storage, and database connection
- `shared/` - Shared schemas, types, and API route definitions
- `attached_assets/` - Static assets including video and images

## External Dependencies

### Payment Processing
- **Stripe**: Payment links for three pricing tiers (Landing Page R$599, Site Essencial R$799, Site Profissional R$999)

### Database
- **PostgreSQL**: Primary database via `DATABASE_URL` environment variable
- **connect-pg-simple**: Session storage (available but not currently used)

### Frontend Libraries
- **Radix UI**: Headless UI primitives for accessible components
- **Framer Motion**: Animation library for scroll effects and transitions
- **react-scroll**: Smooth scrolling navigation between sections
- **Lucide React**: Icon library

### Communication
- **WhatsApp Integration**: Direct link to business WhatsApp (+559491614484)

### Development Tools
- **Replit Plugins**: Runtime error overlay, cartographer, and dev banner for Replit environment