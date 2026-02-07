# Istruzioni per Chiara - Setup Sistema Prenotazioni

Ciao Chiara! Ecco cosa devi fare stasera per preparare tutto per il sistema di prenotazioni personalizzato.

---

## 1. Registrati a Supabase (Database gratuito)

### Cosa è?
Supabase è dove salveremo tutte le prenotazioni dei clienti. È gratuito fino a 500MB di dati (più che sufficiente per migliaia di prenotazioni).

### Come fare:
1. Vai su **https://supabase.com**
2. Clicca **"Start your project"** (in alto a destra)
3. Accedi con **Google** oppure crea un account con email
4. Una volta dentro, clicca **"New Project"**
5. Compila:
   - **Name**: `prenotazioni-chiara` (o come preferisci)
   - **Database Password**: scegli una password sicura e **SALVALA DA QUALCHE PARTE**
   - **Region**: `Central EU (Frankfurt)` (è la più vicina all'Italia)
6. Clicca **"Create new project"** e aspetta 1-2 minuti

### Cosa mi devi mandare:
Una volta creato il progetto, vai su **Settings** (icona ingranaggio in basso a sinistra) → **API** e copiami:
- **Project URL** (tipo: `https://xxxxx.supabase.co`)
- **anon public key** (una stringa lunga che inizia con `eyJ...`)

---

## 2. Registrati a EmailJS (Email gratuite)

### Cosa è?
EmailJS serve per mandare le email di conferma ai clienti quando prenotano. Gratuito fino a 200 email al mese.

### Come fare:
1. Vai su **https://www.emailjs.com**
2. Clicca **"Sign Up Free"**
3. Registrati con Google o email
4. Una volta dentro, vai su **"Email Services"** nel menu a sinistra
5. Clicca **"Add New Service"**
6. Scegli **"Gmail"** (o il provider che usi per le email)
7. Clicca **"Connect Account"** e autorizza l'accesso alla tua email
8. Dai un nome al servizio (es: `gmail_chiara`) e salva

### Poi crea un template:
1. Vai su **"Email Templates"** nel menu
2. Clicca **"Create New Template"**
3. Imposta:
   - **Template Name**: `conferma_prenotazione`
   - **Subject**: `Conferma prenotazione consulenza - {{client_name}}`
   - **Content** (copia questo):
   ```
   Ciao {{client_name}},

   La tua prenotazione è confermata!

   Data: {{date}}
   Ora: {{time}}

   Se hai bisogno di modificare o cancellare, contattami almeno 24 ore prima.

   A presto!
   Chiara
   ```
4. Salva il template

### Cosa mi devi mandare:
Vai su **"Account"** nel menu e copiami:
- **Public Key** (nella sezione API Keys)
- **Service ID** (lo trovi in Email Services, es: `service_abc123`)
- **Template ID** (lo trovi in Email Templates, es: `template_xyz789`)

---

## Riepilogo - Cosa mi serve da te:

### Da Supabase:
- [ ] Project URL
- [ ] Anon public key

### Da EmailJS:
- [ ] Public Key
- [ ] Service ID
- [ ] Template ID

---

## Tempo stimato
Tutto questo richiede circa **15-20 minuti**.

## Domande?
Se qualcosa non è chiaro o hai problemi, scrivimi e ti aiuto!

---

*Nota: Entrambi i servizi sono gratuiti per l'uso che ne facciamo. Supabase ha un limite di 500MB (migliaia di prenotazioni) e EmailJS 200 email/mese (più che sufficienti per iniziare).*
