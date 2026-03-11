import os
import re

html_path = 'case-study-kalcer.html'

with open(html_path, 'r', encoding='utf-8') as f:
    html_content = f.read()

with open('kalcer_css.txt', 'r', encoding='utf-8') as f:
    css_content = f.read()

with open('kalcer_html_1.txt', 'r', encoding='utf-8') as f:
    html1_content = f.read()

with open('kalcer_html_2.txt', 'r', encoding='utf-8') as f:
    html2_content = f.read()


# 1. Insert CSS
if '/* Kalcer.ID Custom Styles */' not in html_content:
    html_content = html_content.replace('</style>', css_content + '\n    </style>')

# 2. Add Mermaid JS script to head
mermaid_script = '<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>'
if mermaid_script not in html_content:
    html_content = html_content.replace('</head>', mermaid_script + '\n  </head>')

# 3. Replace User Flow and Wireframes sections
# From "<!-- Section: User Flow -->" up to "<!-- Section: UI Design & Design System -->"
pattern = r"<!-- Section: User Flow -->.*?<!-- Section: UI Design & Design System -->"
replacement = f"<!-- Section: User Flow -->\n{html1_content}\n\n{html2_content}\n\n      <!-- Section: UI Design & Design System -->"

html_content = re.sub(pattern, replacement, html_content, flags=re.DOTALL)

# 4. Add Mermaid initialization script at the end of body
mermaid_init = """<script>
mermaid.initialize({
  startOnLoad:true,
  theme:'base',
  themeVariables:{
    primaryColor:'#FEF3ED',
    primaryTextColor:'#1C1611',
    primaryBorderColor:'#E8552A',
    lineColor:'#B5A898',
    secondaryColor:'#FFF7ED',
    tertiaryColor:'#F0FDF4',
    fontSize:'12.5px',
    fontFamily:'Outfit, sans-serif',
    edgeLabelBackground:'#F7F3EE',
    clusterBkg:'#FEF3ED',
  },
  flowchart:{curve:'basis',padding:22}
});
</script>"""

if 'mermaid.initialize' not in html_content:
    html_content = html_content.replace('</body>', mermaid_init + '\n  </body>')

with open(html_path, 'w', encoding='utf-8') as f:
    f.write(html_content)

print("Successfully merged Kalcer.ID.")
