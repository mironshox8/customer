from fastapi import FastAPI, Form
from fastapi.responses import StreamingResponse
import qrcode
import io
import mysql.connector

app = FastAPI()

@app.post("/generate_qr/")
async def generate_qr(user_id: str = Form(...)):
    # QR code yaratish
    qr_img = qrcode.make(f"{user_id}")
    buf = io.BytesIO()
    qr_img.save(buf, format="PNG")
    buf.seek(0)
    return StreamingResponse(buf, media_type="image/png")

# MySQL ulanish
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",  # ← Parolni moslashtiring
    database="qrcodesystem"
)

@app.post("/save_qr/")
async def save_qr(user_id: str = Form(...), qr_value: str = Form(...)):
    cursor = db.cursor()
    cursor.execute("INSERT INTO payments (user_id, qr_value) VALUES (%s, %s)", (user_id, qr_value))
    db.commit()
    return {"status": "success", "message": "Ma’lumotlar saqlandi"}
