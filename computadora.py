import tkinter as tk
from tkinter import messagebox, filedialog, scrolledtext
import os
import platform
import subprocess

def open_calculator():
    try:
        subprocess.Popen("calc" if os.name == "nt" else "gnome-calculator")
    except FileNotFoundError:
        messagebox.showerror("Error", "Calculadora no disponible en este sistema")

def open_notepad():
    top = tk.Toplevel(root)
    top.title("Bloc de Notas")
    text_area = scrolledtext.ScrolledText(top, width=60, height=20)
    text_area.pack()
    
    def save_file():
        file_path = filedialog.asksaveasfilename(defaultextension=".txt",
                                                 filetypes=[("Text files", "*.txt"),
                                                            ("All files", "*.*")])
        if file_path:
            with open(file_path, "w") as file:
                file.write(text_area.get("1.0", tk.END))
    
    save_button = tk.Button(top, text="Guardar", command=save_file)
    save_button.pack()

def open_file_explorer():
    folder = filedialog.askdirectory()
    if folder:
        os.startfile(folder) if os.name == "nt" else subprocess.Popen(["xdg-open", folder])

def system_info():
    info = f"Sistema Operativo: {platform.system()}\n"
    info += f"Versión: {platform.version()}\n"
    info += f"Arquitectura: {platform.architecture()[0]}\n"
    info += f"Procesador: {platform.processor()}\n"
    messagebox.showinfo("Información del Sistema", info)

root = tk.Tk()
root.title("Funciones de Computadora")
root.geometry("300x300")

btn_calc = tk.Button(root, text="Abrir Calculadora", command=open_calculator)
btn_calc.pack(pady=10)

btn_notepad = tk.Button(root, text="Abrir Bloc de Notas", command=open_notepad)
btn_notepad.pack(pady=10)

btn_explorer = tk.Button(root, text="Abrir Explorador de Archivos", command=open_file_explorer)
btn_explorer.pack(pady=10)

btn_sysinfo = tk.Button(root, text="Información del Sistema", command=system_info)
btn_sysinfo.pack(pady=10)

root.mainloop()
