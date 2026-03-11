content = open('case-study-kalcer.html', encoding='utf-8').read()

# ── FLOW A: replace the entire mermaid block ──────────────────────────────────
old_flow_a_start = '<div class="mermaid">\r\nflowchart TD\r\n    A([📱 User opens Kalcer.ID])'
old_flow_a_end   = '    style Q fill:#fff7ed,color:#9a3412,stroke:#F5A623\r\n    </div>'

# Find where Flow A starts and ends in the file
idx_a = content.find(old_flow_a_start)
idx_a_end = content.find(old_flow_a_end, idx_a) + len(old_flow_a_end)

new_flow_a = '''<div class="mermaid">
flowchart TD
    A([User opens Kalcer.ID]) --> B[Explore Feed loads<br>Personalised cards: trending nearby<br>Location permission requested]
    B --> C{Location permitted?}
    C -- Yes --> D[Feed ranked by proximity and trending score<br>Geolocation-aware cards]
    C -- No --> E[Feed ranked by general trending<br>Prompt to enable location later]
    D --> F
    E --> F[User browses Hangout Cards<br>Image · Name · Verified badge · Open/Closed · Rating]

    F --> G{Interaction type?}
    G -- Search intent --> H[Tap search bar<br>Type keyword or category<br>Instant live results filter]
    G -- Filter intent --> I[Tap filter chips<br>Category / Open Now / District / Vibe<br>Results update without page reload]
    G -- Curious tap --> J

    H --> J[Hangout Detail Page<br>Hero image full-bleed<br>Name + Verified + Category]
    I --> J

    J --> K[User reads operational hours<br>Open/Closed status badge<br>Schedule table if tapped]
    K --> L[User scrolls to Reviews section<br>Reads community ratings<br>Photo reviews visible]
    L --> M{User intent?}

    M -- Save for later --> N[Tap Bookmark icon<br>Heart animation plays<br>Added to Wishlist instantly]
    N --> O[Toast: Saved to your Wishlist<br>No account? Soft prompt to sign up<br>Guest can bookmark with local storage]
    O --> P{User logged in?}
    P -- No nudge --> Q[Non-intrusive banner<br>Sign up to keep your saves forever<br>Dismissable — not blocking]
    P -- Yes --> R

    M -- Check in --> S{User logged in?}
    S -- No --> T[Auth wall with context<br>Log in to check in at this spot<br>Sign up or continue as guest]
    T --> U[Auth Flow<br>Email / Google / Phone OTP<br>Fast — under 3 screens]
    U --> S
    S -- Yes --> V[Tap Check In button<br>Confirmation sheet slides up<br>Venue name · timestamp · optional photo]
    V --> W[Check-in confirmed<br>Badge added to user profile<br>Venue check-in count increments]

    W --> R
    M -- Leave a review --> X{User checked in or visited?}
    X -- Yes --> Y[Review Composer<br>Star rating 1 to 5<br>Text field: What made this spot special?<br>Photo upload optional]
    X -- No prompt --> Z[Soft gate: Have you visited this place?<br>Two options: I have been here or Just sharing thoughts<br>Both paths allowed]
    Z --> Y
    Y --> AA[Submit review<br>Moderation flag check<br>Review appears after brief delay]
    AA --> AB([Review live · Profile updated<br>XP / badge earned if gamification enabled])

    R --> F

    style A fill:#E8552A,color:#fff,stroke:none
    style AB fill:#2D9B6F,color:#fff,stroke:none
    style C fill:#F7F3EE,color:#7A6B5D,stroke:#E8552A
    style G fill:#F7F3EE,color:#7A6B5D,stroke:#E8552A
    style M fill:#F7F3EE,color:#7A6B5D,stroke:#F5A623
    style P fill:#F7F3EE,color:#7A6B5D,stroke:#F5A623
    style S fill:#F7F3EE,color:#7A6B5D,stroke:#2D9B6F
    style X fill:#F7F3EE,color:#7A6B5D,stroke:#2D9B6F
    style N fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    style W fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    style T fill:#fff7ed,color:#9a3412,stroke:#F5A623
    style Q fill:#fff7ed,color:#9a3412,stroke:#F5A623
    </div>'''

content = content[:idx_a] + new_flow_a + content[idx_a_end:]

# ── FLOW B: replace the entire mermaid block ──────────────────────────────────
old_flow_b_start = '<div class="mermaid">\r\nflowchart TD\r\n    BA([💼 Business Owner accesses'
old_flow_b_end   = '    style BW fill:#f0fdf4,color:#166534,stroke:#2D9B6F\r\n    </div>'

idx_b = content.find(old_flow_b_start)
idx_b_end = content.find(old_flow_b_end, idx_b) + len(old_flow_b_end)

new_flow_b = '''<div class="mermaid">
flowchart TD
    BA([Business Owner accesses Kalcer.ID Business Portal]) --> BB[Login screen<br>Email + password OR Google Business account]
    BB --> BC{Account verified?}
    BC -- Pending verification --> BD[Verification pending screen<br>Your venue is under review 24 to 48h<br>Email notification queued]
    BC -- Verified --> BE[Business Dashboard loads<br>KPI cards: Views · Check-ins · Reviews · Saves<br>Notification bell with alerts]

    BE --> BF{Notifications present?}
    BF -- Yes --> BG[Owner reads notification tray<br>New reviews to respond to<br>Profile completion prompts · System alerts]
    BG --> BH[Owner taps review notification<br>Review Response Panel<br>Shows star rating + user comment]
    BH --> BI[Owner types public response<br>Thank you for visiting<br>Submit → response appears below review]
    BF -- None --> BJ

    BI --> BJ[Owner navigates to My Venue management section]
    BJ --> BK[Venue Editor loads<br>Current details shown in editable form<br>Last updated timestamp visible]

    BK --> BL{What to update?}
    BL -- Operational Hours --> BM[Edit hours table<br>Day-by-day toggle On/Off<br>From/To time picker · Holiday exception dates]
    BM --> BN[Preview shows how it appears to end-users<br>Opens 10:00 AM<br>Save → Hours update live on platform]

    BL -- Images --> BO[Image Manager<br>Drag-and-drop upload zone<br>Existing images in grid with delete X<br>Set cover photo by dragging to first slot]
    BO --> BP[Image compression auto-runs<br>Alt-text field optional<br>Max 10 images per venue]
    BP --> BQ[Save → New images live immediately<br>Old cover replaced with fade transition]

    BL -- Venue Info --> BR[Edit form<br>Venue name · Description · Category<br>Address · Social links · Vibe tags]
    BR --> BS{Changes pass validation?}
    BS -- Missing required fields --> BT[Inline errors highlighted in red<br>Scroll to first error auto<br>No data loss on validation fail]
    BS -- Valid --> BU[Save draft OR Publish immediately]
    BU --> BV[Change log entry created<br>Admin moderation for sensitive fields<br>Minor edits go live instantly]

    BN --> BW
    BQ --> BW
    BV --> BW[Venue page updated<br>Success toast: Your venue is live<br>Dashboard analytics refresh]
    BW --> BX([Session complete<br>Changes reflected on explore feed<br>Owner can preview public page])

    style BA fill:#0E8A7A,color:#fff,stroke:none
    style BX fill:#2D9B6F,color:#fff,stroke:none
    style BC fill:#F7F3EE,color:#7A6B5D,stroke:#0E8A7A
    style BF fill:#F7F3EE,color:#7A6B5D,stroke:#F5A623
    style BL fill:#F7F3EE,color:#7A6B5D,stroke:#0E8A7A
    style BS fill:#F7F3EE,color:#7A6B5D,stroke:#2D9B6F
    style BD fill:#fff7ed,color:#9a3412,stroke:#F5A623
    style BT fill:#fef2f2,color:#991b1b,stroke:#DC3545
    style BN fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    style BW fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    </div>'''

if idx_b != -1 and idx_b_end > idx_b:
    content = content[:idx_b] + new_flow_b + content[idx_b_end:]
else:
    print("Warning: Could not find Flow B start/end markers")

open('case-study-kalcer.html', 'w', encoding='utf-8').write(content)
print("Done! Both flows replaced.")
