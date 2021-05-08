import time
from selenium import webdriver
from selenium.common.exceptions import ElementClickInterceptedException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as ec
from selenium.webdriver.chrome.options import Options


shadF = Options()
shadF.add_experimental_option("prefs", {"download.default_directory": r"C:\Users\ppsder\Desktop\web dev\shadrach download"})
ppsder = webdriver.Chrome(executable_path=r"C:\Users\ppsder\Desktop\web dev\selenium\chromedriver_win32\chromedriver.exe", chrome_options=shadF)

ppsder.get("https://trans-logistics.amazon.com/sortcenter/vista/?setNodeId=OAK5")

ppsder.maximize_window()

ppsder.find_element_by_xpath(r"/html/body/div[1]/div[2]/div/div/div/div/div/div[2]/div[2]/ul/li[4]/a").click()
time.sleep(20)
wait = WebDriverWait(ppsder, 10)
try:
    e1 = wait.until(ec.element_to_be_clickable((By.XPATH, "//*[@id='containerExcel']")))
except ElementClickInterceptedException:
    try:
        e1 = wait.until(ec.element_to_be_clickable((By.XPATH, "/html/body/div[1]/div[2]/div/div/div/div/div/div[2]/div[2]/div[5]/div[1]/div[6]/input")))
    except ElementClickInterceptedException:
        print("another instance of the PATH is causing this issue")

e1.click()
time.sleep(1000)
e2 = wait.until(ec.element_to_be_clickable((By.XPATH, r"/html/body/div[1]/div[2]/div/div/div/div/div/div[2]/div[2]/div[5]/div[1]/div[6]/div[1]/a")))
e2.click()

time.sleep(5)
ppsder.quit()